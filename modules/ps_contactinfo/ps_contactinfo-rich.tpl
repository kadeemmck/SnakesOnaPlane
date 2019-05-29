{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

<div class="block-contact">
  <h4>{l s='Store information' d='Modules.Contactinfo.Shop'}</h4>
  {$contact_infos.address.formatted nofilter}
  {if $contact_infos.phone}
    <br>
    {* First tag [1][/1] is for a HTML tag. *}
    {l s='Call us: [1]%phone%[/1]'
      sprintf=[
        '[1]' => '<span>',
        '[/1]' => '</span>',
        '%phone%' => $contact_infos.phone
      ]
      d='Modules.Contactinfo.Shop'
    }
  {/if}
  {if $contact_infos.fax}
    <br>
    {* First tag [1][/1] is for a HTML tag. *}
    {l
      s='Fax: [1]%fax%[/1]'
      sprintf=[
        '[1]' => '<span>',
        '[/1]' => '</span>',
        '%fax%' => $contact_infos.fax
      ]
      d='Modules.Contactinfo.Shop'
    }
  {/if}
  {if $contact_infos.email}
    <br>
    {* First tag [1][/1] is for a HTML tag. *}
    {l
      s='Email us: [1]%email%[/1]'
      sprintf=[
        '[1]' => '<span>',
        '[/1]' => '</span>',
        '%email%' => $contact_infos.email
      ]
      d='Modules.Contactinfo.Shop'
    }
  {/if}
</div>
