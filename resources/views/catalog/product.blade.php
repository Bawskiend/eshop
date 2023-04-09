<div class="page-container">
<div class="element-content" id="{{ $product->id }}"
     itemscope itemtype="http://schema.org/Product">
    <div class="element-images" id="">
        <div class="element-images__list" data-entity="">
            <div class="element-images__list-item"><img loading="lazy" class="element-images__list-item-image" src="{{ $product->product_image }}" data-zoom-image=""></div>
        </div>
    </div>


{{--    <div class="element-info-sticky">--}}
{{--        <div class="element-info" data-product-id="<?=$arResult['ID']?>">--}}
{{--            <?php--}}
{{--            if ($arParams['DISPLAY_NAME'] === 'Y') {--}}
{{--            ?>--}}
{{--            <div class="element-heading heading-big text-left"><?= $name ?></div>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            <?--}}
{{--            foreach ($arParams['PRODUCT_PAY_BLOCK_ORDER'] as $blockName) {--}}
{{--            switch ($blockName) {--}}
{{--            case 'price':--}}
{{--            ?>--}}
{{--            <?php--}}
{{--            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {--}}
{{--            ?>--}}
{{--            <div class="product-item-detail-price-old" id="<?= $itemIds['OLD_PRICE_ID'] ?>"--}}
{{--                 style="display: <?= ($showDiscount ? '' : 'none') ?>;">--}}
{{--                <?= ($showDiscount ? $price['PRINT_RATIO_BASE_PRICE'] : '') ?>--}}
{{--            </div>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            <div class="element-price" id="<?= $itemIds['PRICE_ID'] ?>">--}}
{{--                <?= $price['PRINT_RATIO_PRICE'] ?>--}}
{{--            </div>--}}
{{--            <?php--}}
{{--            if ($arParams['SHOW_OLD_PRICE'] === 'Y') {--}}
{{--            ?>--}}
{{--            <div class="item_economy_price" id="<?= $itemIds['DISCOUNT_PRICE_ID'] ?>"--}}
{{--                 style="display: <?= ($showDiscount ? '' : 'none') ?>;">--}}
{{--                <?php--}}
{{--                if ($showDiscount) {--}}
{{--                    echo Loc::getMessage('CT_BCE_CATALOG_ECONOMY_INFO2', array('#ECONOMY#' => $price['PRINT_RATIO_DISCOUNT']));--}}
{{--                }--}}
{{--                ?>--}}
{{--            </div>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--            <?php--}}
{{--            break;--}}

{{--            }--}}
{{--            } ?>--}}
{{--            <?php--}}
{{--            foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName) {--}}
{{--            switch ($blockName) {--}}
{{--            case 'sku':--}}
{{--            if ($haveOffers && !empty($arResult['OFFERS_PROP'])) {--}}
{{--            ?>--}}
{{--            <div id="<?= $itemIds['TREE_ID'] ?>">--}}
{{--                <?php--}}
{{--                foreach ($arResult['SKU_PROPS'] as $skuProperty) {--}}
{{--                if (!isset($arResult['OFFERS_PROP'][$skuProperty['CODE']]))--}}
{{--                    continue;--}}

{{--                $propertyId = $skuProperty['ID'];--}}
{{--                $skuProps[] = array(--}}
{{--                    'ID' => $propertyId,--}}
{{--                    'SHOW_MODE' => $skuProperty['SHOW_MODE'],--}}
{{--                    'VALUES' => $skuProperty['VALUES'],--}}
{{--                    'VALUES_COUNT' => $skuProperty['VALUES_COUNT']--}}
{{--                );--}}
{{--                ?>--}}
{{--                <div class="product-item-detail-info-container" data-entity="sku-line-block">--}}
{{--                    <div class="product-item-detail-info-container-title"><?= htmlspecialcharsEx($skuProperty['NAME']) ?></div>--}}
{{--                    <div class="product-item-scu-container">--}}
{{--                        <div class="product-item-scu-block">--}}
{{--                            <div class="product-item-scu-list">--}}
{{--                                <ul class="product-item-scu-item-list">--}}
{{--                                    <?php--}}
{{--                                    foreach ($skuProperty['VALUES'] as &$value) {--}}
{{--                                    $value['NAME'] = htmlspecialcharsbx($value['NAME']);--}}

{{--                                    if ($skuProperty['SHOW_MODE'] === 'PICT') {--}}
{{--                                    ?>--}}
{{--                                    <li class="product-item-scu-item-color-container"--}}
{{--                                        title="<?= $value['NAME'] ?>"--}}
{{--                                        data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"--}}
{{--                                        data-onevalue="<?= $value['ID'] ?>">--}}
{{--                                        <div class="product-item-scu-item-color-block">--}}
{{--                                            <div class="product-item-scu-item-color"--}}
{{--                                                 title="<?= $value['NAME'] ?>"--}}
{{--                                                 style="background-image: url('<?= $value['PICT']['SRC'] ?>');">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <?php--}}
{{--                                    } else {--}}
{{--                                    ?>--}}
{{--                                    <li class="product-item-scu-item-text-container"--}}
{{--                                        title="<?= $value['NAME'] ?>"--}}
{{--                                        data-treevalue="<?= $propertyId ?>_<?= $value['ID'] ?>"--}}
{{--                                        data-onevalue="<?= $value['ID'] ?>">--}}
{{--                                        <div class="product-item-scu-item-text-block">--}}
{{--                                            <div class="product-item-scu-item-text"><?= $value['NAME'] ?></div>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                    <?php--}}
{{--                                    }--}}
{{--                                    }--}}
{{--                                    ?>--}}
{{--                                </ul>--}}
{{--                                <div style="clear: both;"></div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="product-item-size-list">--}}
{{--                        <span>Таблица размеров</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <?php--}}
{{--                }--}}
{{--                ?>--}}
{{--            </div>--}}
{{--            <?php--}}
{{--            }--}}

{{--            break;--}}
{{--            }--}}
{{--            }--}}
{{--            ?>--}}
{{--            <?--}}
{{--            if (!$haveOffers && !empty($arResult['PROPERTIES']['RAZMER']['VALUE'])){?>--}}
{{--            <div class="product-item-detail-info-container" data-entity="sku-line-block">--}}
{{--                <div class="product-item-detail-info-container-title"><?= htmlspecialcharsEx($arResult['PROPERTIES']['RAZMER']['NAME']) ?></div>--}}
{{--                <div class="product-item-scu-container">--}}
{{--                    <div class="product-item-scu-block">--}}
{{--                        <div class="product-item-scu-list">--}}
{{--                            <ul class="product-item-scu-item-list">--}}

{{--                                <li class="product-item-scu-item-text-container selected"--}}
{{--                                    title="<?= $arResult['PROPERTIES']['RAZMER']['VALUE'] ?>">--}}
{{--                                    <div class="product-item-scu-item-text-block">--}}
{{--                                        <div class="product-item-scu-item-text"><?= $arResult['PROPERTIES']['RAZMER']['VALUE'] ?></div>--}}
{{--                                    </div>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <div style="clear: both;"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="product-item-size-list">--}}
{{--                    <span>Таблица размеров</span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <?}--}}
{{--            ?>--}}
{{--            <div class="element-buttons">--}}
{{--                <?--}}
{{--                foreach ($arParams['PRODUCT_PAY_BLOCK_ORDER'] as $blockName) {--}}
{{--                switch ($blockName) {--}}
{{--                case 'buttons':--}}
{{--                ?>--}}
{{--                <div class="element-buttons__add-to-cart" id="<?= $itemIds['BASKET_ACTIONS_ID'] ?>"--}}
{{--                     style="display: <?= ($actualItem['CAN_BUY'] ? '' : 'none') ?>;">--}}
{{--                    <?php--}}
{{--                    if ($showAddBtn) {--}}
{{--                    ?>--}}
{{--                    <div class=""--}}
{{--                         id="<?= $itemIds['ADD_BASKET_LINK'] ?>"><?= $arParams['MESS_BTN_ADD_TO_BASKET'] ?></div>--}}

{{--                    <?php--}}
{{--                    }--}}

{{--                    if ($showBuyBtn) {--}}
{{--                    ?>--}}
{{--                    <div id="<?= $itemIds['BUY_LINK'] ?>"><?= $arParams['MESS_BTN_BUY'] ?></div>--}}
{{--                    <?php--}}
{{--                    }--}}
{{--                    ?>--}}
{{--                </div>--}}
{{--                <?php--}}
{{--                /*if ($showSubscribe) {--}}
{{--                    ?>--}}
{{--                    <div class="product-item-detail-info-container">--}}
{{--                        <?php--}}
{{--                        $APPLICATION->IncludeComponent(--}}
{{--                            'bitrix:catalog.product.subscribe',--}}
{{--                            '',--}}
{{--                            array(--}}
{{--                                'CUSTOM_SITE_ID' => $arParams['CUSTOM_SITE_ID'] ?? null,--}}
{{--                                'PRODUCT_ID' => $arResult['ID'],--}}
{{--                                'BUTTON_ID' => $itemIds['SUBSCRIBE_LINK'],--}}
{{--                                'BUTTON_CLASS' => 'btn btn-default product-item-detail-buy-button',--}}
{{--                                'DEFAULT_DISPLAY' => !$actualItem['CAN_BUY'],--}}
{{--                                'MESS_BTN_SUBSCRIBE' => $arParams['~MESS_BTN_SUBSCRIBE'],--}}
{{--                            ),--}}
{{--                            $component,--}}
{{--                            array('HIDE_ICONS' => 'Y')--}}
{{--                        );--}}
{{--                        ?>--}}
{{--                    </div>--}}
{{--                    <?php--}}
{{--                }*/--}}
{{--                ?>--}}
{{--                <div class="element-buttons__not_available " style="display: <?= (!$actualItem['CAN_BUY'] ? '' : 'none') ?>;">--}}
{{--                    <div class=""--}}
{{--                         id="<?= $itemIds['NOT_AVAILABLE_MESS'] ?>"--}}
{{--                         href="javascript:void(0)"--}}
{{--                         rel="nofollow" style="display: <?= (!$actualItem['CAN_BUY'] ? '' : 'none') ?>;">--}}
{{--                        <?= $arParams['MESS_NOT_AVAILABLE'] ?>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <?php--}}
{{--                break;--}}

{{--                }--}}
{{--                }--}}
{{--                ?>--}}
{{--                <div class="element-buttons__add-to-favorites <?echo in_array($arResult['ID'],$_SESSION['FAVORITE_ITEMS']) ? "active" : ''?>">--}}

{{--                    <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9997 1.97108C18.6567 -4.87192 35.3007 7.10258 11.9997 22.5001C-11.3013 7.10408 5.34267 -4.87192 11.9997 1.97108Z" fill="#D9D9D9"/>--}}
{{--                    </svg>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="element-characteristics" id="<?= $itemIds['TAB_CONTAINERS_ID'] ?>>--}}
{{--                <?php--}}
{{--            foreach ($arParams['PRODUCT_INFO_BLOCK_ORDER'] as $blockName) {--}}
{{--            switch ($blockName) {--}}
{{--            case 'props':--}}
{{--            if (!empty($arResult['DISPLAY_PROPERTIES']) || $arResult['SHOW_OFFERS_PROPS'])--}}
{{--            {--}}
{{--            ?>--}}
{{--                <div class=" element-characteristics__list--}}
{{--            " data-entity="tab-container" data-value="properties">--}}
{{--            <?php--}}
{{--            if (!empty($arResult['DISPLAY_PROPERTIES'])) {--}}
{{--            ?>--}}
{{--            <div class="element-characteristics-heading">Характеристики</div>--}}
{{--            <?php--}}
{{--            foreach ($arResult['DISPLAY_PROPERTIES'] as $property) {--}}
{{--            if (isset($arParams['MAIN_BLOCK_PROPERTY_CODE'][$property['CODE']])) {--}}
{{--            ?>--}}
{{--            <div class="element-characteristics__list-item">--}}
{{--                <div class="element-characteristics__list-item-name">--}}
{{--                    <span><?= $property['NAME'] ?></span></div>--}}
{{--                <div class="element-characteristics__list-item-value"><span><?= (is_array($property['DISPLAY_VALUE'])--}}
{{--                            ? implode(' / ', $property['DISPLAY_VALUE'])--}}
{{--                            : $property['DISPLAY_VALUE']) ?></span></div>--}}
{{--            </div>--}}
{{--            <?php--}}
{{--            }--}}
{{--            }--}}
{{--            unset($property);--}}
{{--            ?>--}}
{{--            <?php--}}
{{--            }--}}
{{--            if ($arResult['SHOW_OFFERS_PROPS']) {--}}
{{--            ?>--}}
{{--            <dl class="product-item-detail-properties" id="<?= $itemIds['DISPLAY_MAIN_PROP_DIV'] ?>"></dl>--}}
{{--            <?php--}}
{{--            }--}}
{{--            ?>--}}
{{--        </div>--}}
{{--        <?php--}}
{{--        }--}}

{{--        break;--}}

{{--        }--}}
{{--        } ?>--}}
{{--        <?php--}}
{{--        if ($showDescription)--}}
{{--        {--}}
{{--        ?>--}}
{{--        <div class="element-description">--}}
{{--            <div class="element-description-heading">Описание</div>--}}
{{--            <div class="element-description-text" data-value="description"--}}
{{--                 itemprop="description" id="<?= $itemIds['DESCRIPTION_ID'] ?>">--}}
{{--                <?php--}}
{{--                if (--}}
{{--                    $arResult['PREVIEW_TEXT'] != ''--}}
{{--                    && (--}}
{{--                        $arParams['DISPLAY_PREVIEW_TEXT_MODE'] === 'S'--}}
{{--                        || ($arParams['DISPLAY_PREVIEW_TEXT_MODE'] === 'E' && $arResult['DETAIL_TEXT'] == '')--}}
{{--                    )--}}
{{--                ) {--}}
{{--                    echo $arResult['PREVIEW_TEXT_TYPE'] === 'html' ? $arResult['PREVIEW_TEXT'] : '<p>' . $arResult['PREVIEW_TEXT'] . '</p>';--}}
{{--                }--}}

{{--                if ($arResult['DETAIL_TEXT'] != '') {--}}
{{--                    echo $arResult['DETAIL_TEXT_TYPE'] === 'html' ? $arResult['DETAIL_TEXT'] : '<p>' . $arResult['DETAIL_TEXT'] . '</p>';--}}
{{--                }--}}
{{--                ?>--}}
{{--            </div>--}}
{{--            <?php--}}
{{--            } ?>--}}
{{--        </div>--}}

{{--    </div>--}}
</div>
</div>
