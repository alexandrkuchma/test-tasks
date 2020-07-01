<?php

namespace Okay\Modules\SimplaMarket\MinimalOrderAmount\Extenders;


use Okay\Core\Cart;
use Okay\Core\EntityFactory;
use Okay\Core\Money;
use Okay\Core\Settings;
use Okay\Core\FrontTranslations;
use Okay\Core\Modules\Extender\ExtensionInterface;
use Okay\Entities\CurrenciesEntity;

class FrontExtender implements ExtensionInterface
{

    private $settings;
    private $cartCore;
    private $frontTranslations;
    private $moneyCore;

    private $currenciesEntity;

    public function __construct(Settings $settings, Cart $cartCore, FrontTranslations $frontTranslations, Money $moneyCore, EntityFactory $entityFactory)
    {
        $this->settings          = $settings;
        $this->cartCore          = $cartCore;
        $this->moneyCore         = $moneyCore;
        $this->frontTranslations = $frontTranslations;
        $this->currenciesEntity  = $entityFactory->get(CurrenciesEntity::class);
    }

    public function getCartValidateError($error)
    {
        if (!empty($error)) {
            return $error;
        }

        $minOrderAmount = $this->settings->get('min_order_amount');
        if ($minOrderAmount == 0) {
            return $error;
        }

        $cart = $this->cartCore->get();
        if ($cart->total_price < $minOrderAmount) {
            $error                     = 'min_order_amount';
            $currency                  = $this->getCurrentCurrency();
            $convertedTotalPrice       = $this->moneyCore->convert($minOrderAmount, $currency->id, true);
            $minOrderAmountStr = $this->frontTranslations->getTranslation('error_min_order_amount');
            $this->frontTranslations->addTranslation('form_min_order_amount', "{$minOrderAmountStr}: {$convertedTotalPrice} {$currency->sign}");
        }

        return $error;
    }

    private function getCurrentCurrency()
    {
        if (!empty($_SESSION['currency_id'])) {
            $currentCurrency = $this->currenciesEntity->get((int) $_SESSION['currency_id']);
        } else {
            $currentCurrency = $this->currenciesEntity->getMainCurrency();
        }

        return $currentCurrency;
    }
}