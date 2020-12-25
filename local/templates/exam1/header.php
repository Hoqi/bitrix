<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?$APPLICATION->ShowHead();?>
    <title>
        <?$APPLICATION->ShowTitle()?>
    </title>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/style.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/reset.css');?>
    <?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH.'/css/owl.carousel.css');?>

    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/jquery.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/owl.carousel.min.js');?>
    <?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH.'/js/scripts.js');?>
    <link rel="icon" type="image/vnd.microsoft.icon" href="favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="<?= SITE_TEMPLATE_PATH ?>/img/favicon.ico">
</head>

<body>
    <div id="panel">
        <?$APPLICATION->ShowPanel();?>
    </div>
    <!-- wrap -->
    <div class="wrap">
        <!-- header -->
        <header class="header">
            <div class="inner-wrap">
                <div class="logo-block"><a href="" class="logo">Мебельный магазин</a>
                </div>
                <div class="main-phone-block">
                    <? if ( date('H') < 18 && date('H') > 9): ?>
                    <a href="tel:84952128506" class="phone">8 (495) 212-85-06</a>
                    <? else: ?>
                    <a href="mailto:store@store.ru" class="phone">store@store.ru</a>
                    <? endif; ?>
                    <div class="shedule">время работы с 9-00 до 18-00</div>
                </div>
                <div class="actions-block">
                    <form action="/" class="main-frm-search">
                        <input type="text" placeholder="Поиск">
                        <button type="submit"></button>
                    </form>
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:system.auth.form", 
                        "auth", 
                        array(
                            "FORGOT_PASSWORD_URL" => "/login/index.php?forgot_password=yes",
                            "PROFILE_URL" => "/login/user.php",
                            "REGISTER_URL" => "/login/index.php?register=yes",
                            "SHOW_ERRORS" => "Y",
                            "COMPONENT_TEMPLATE" => "auth"
                        ),
                        false
                    ); ?>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- nav -->
        <?$APPLICATION->IncludeComponent(
            "bitrix:menu", 
            "top_multi", 
            array(
                "ALLOW_MULTI_SELECT" => "N",
                "CHILD_MENU_TYPE" => "left",
                "COMPONENT_TEMPLATE" => "top_multi",
                "DELAY" => "N",
                "MAX_LEVEL" => "3",
                "MENU_CACHE_GET_VARS" => array(
                ),
                "MENU_CACHE_TIME" => "360000",
                "MENU_CACHE_TYPE" => "N",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "ROOT_MENU_TYPE" => "top",
                "USE_EXT" => "N"
            ),
            false
        );?>
        <!-- /nav -->
        <? if ($APPLICATION->GetCurPage() != '/'): ?>
        <!-- breadcrumbs -->
        <div class="breadcrumbs-box">
            <div class="inner-wrap">
                <a href="">Главная</a>
                <a href="">Мебель</a>
                <span>Выставки и события</span>
            </div>
        </div>
        <!-- /breadcrumbs -->
        <? endif; ?>
        <!-- page -->
        <div class="page">
            <!-- content box -->
            <div class="content-box">
                <!-- content -->
                <div class="content">
                    <div class="cnt">
                        <? if ($APPLICATION->GetCurPage() != '/'): ?>
                        <header>
                            <h1>
                                <?$APPLICATION->ShowTitle(true)?>
                            </h1>
                        </header>
                        <hr>
                        <? else: ?>
                        <?
                            $APPLICATION->IncludeFile(
                                SITE_TEMPLATE_PATH . "/include/mainContent.php",
                                Array(),
                                Array("MODE" => "html")
                                );
                        ?>
                        <? endif; ?>