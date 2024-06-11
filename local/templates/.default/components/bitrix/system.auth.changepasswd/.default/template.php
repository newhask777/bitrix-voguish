<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="login-right">

<?
ShowMessage($arParams["~AUTH_RESULT"]);
?>
<form method="post" action="<?=$arResult["AUTH_FORM"]?>" name="bform">
	<?if (strlen($arResult["BACKURL"]) > 0): ?>
	<input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
	<? endif ?>
	<input type="hidden" name="AUTH_FORM" value="Y">
	<input type="hidden" name="TYPE" value="CHANGE_PWD">
        <div>
            <b><?=GetMessage("AUTH_CHANGE_PASSWORD")?></b>
        </div>

        <div>
            <span><span class="starrequired">*</span><?=GetMessage("AUTH_LOGIN")?></span>
            <input type="text" name="USER_LOGIN" maxlength="50" value="<?=$arResult["LAST_LOGIN"]?>" class="bx-auth-input" />
        </div>
        <div>
            <span><span class="starrequired">*</span><?=GetMessage("AUTH_CHECKWORD")?></span>
            <input type="text" name="USER_CHECKWORD" maxlength="50" value="<?=$arResult["USER_CHECKWORD"]?>" class="bx-auth-input" />
        </div>
        <div>
            <span><span class="starrequired">*</span><?=GetMessage("AUTH_NEW_PASSWORD_REQ")?></span>
            <input type="password" name="USER_PASSWORD" maxlength="50" value="<?=$arResult["USER_PASSWORD"]?>" class="bx-auth-input" autocomplete="off" />
<?if($arResult["SECURE_AUTH"]):?>
            <span class="bx-auth-secure" id="bx_auth_secure" title="<?echo GetMessage("AUTH_SECURE_NOTE")?>" style="display:none">
                <div class="bx-auth-secure-icon"></div>
            </span>
            <noscript>
            <span class="bx-auth-secure" title="<?echo GetMessage("AUTH_NONSECURE_NOTE")?>">
                <div class="bx-auth-secure-icon bx-auth-secure-unlock"></div>
            </span>
            </noscript>
<script type="text/javascript">
document.getElementById('bx_auth_secure').style.display = 'inline-block';
</script>
<?endif?>
        </div>
        <div>
            <span><span class="starrequired">*</span><?=GetMessage("AUTH_NEW_PASSWORD_CONFIRM")?></span>
            <input type="password" name="USER_CONFIRM_PASSWORD" maxlength="50" value="<?=$arResult["USER_CONFIRM_PASSWORD"]?>" class="bx-auth-input" autocomplete="off" />
        </div>
		<?if($arResult["USE_CAPTCHA"]):?>
        <div>
            <input type="hidden" name="captcha_sid" value="<?=$arResult["CAPTCHA_CODE"]?>" />
            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["CAPTCHA_CODE"]?>" width="180" height="40" alt="CAPTCHA" />
        </div>
        <div>
            <span><span class="starrequired">*</span><?echo GetMessage("system_auth_captcha")?></span>
            <input type="text" name="captcha_word" maxlength="50" value="" />
        </div>
		<?endif?>
        <div>
            <input type="submit" name="change_pwd" value="<?=GetMessage("AUTH_CHANGE")?>" />
        </div>

<p><?echo $arResult["GROUP_POLICY"]["PASSWORD_REQUIREMENTS"];?></p>
<p><span class="starrequired">*</span><?=GetMessage("AUTH_REQ")?></p>
<p>
<a href="<?=$arResult["AUTH_AUTH_URL"]?>"><b><?=GetMessage("AUTH_AUTH")?></b></a>
</p>

</form>

<script type="text/javascript">
document.bform.USER_LOGIN.focus();
</script>
</div>