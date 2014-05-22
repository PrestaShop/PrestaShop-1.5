{*
* 2007-2013 PrestaShop
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
*  @copyright  2007-2013 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if $tax_exempt || ((isset($product_tax_breakdown) && $product_tax_breakdown|@count > 0) || (isset($ecotax_tax_breakdown) && $ecotax_tax_breakdown|@count > 0))}
<!--  TAX DETAILS -->
<table style="width: 100%">
	<tr>
		<td style="width: 17%"></td>
		<td style="width: 83%">
			{if $tax_exempt}
				{l s='Exempt of VAT according section 259B of the General Tax Code.' pdf='true'}
			{else}
			<table style="width: 82%" >
				<tr style="line-height:5px;">
					<td style="text-align: left; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 28%">{l s='Tax Detail' pdf='true'}</td>
					<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 18%">{l s='Tax Rate' pdf='true'}</td>
					<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 18%">{l s='Total Tax' pdf='true'}</td>
					<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 18%">{l s='Total Tax Excl' pdf='true'}</td>
					<td style="text-align: right; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 18%">{l s='Total Tax Incl' pdf='true'}</td>
				</tr>

				{if isset($product_tax_breakdown)}
					{foreach $product_tax_breakdown as $rate => $product_tax_infos}
					<tr style="line-height:6px;background-color:{cycle values='#FFF,#DDD'};">
					 <td style="width: 28%">
						{if !isset($pdf_product_tax_written) && (!empty($shipping_tax_breakdown) || !empty($wrapping_tax_breakdown))}
							{l s='Products' pdf='true'}
							{assign var=pdf_product_tax_written value=1}
						{/if}
					</td>
					 <td style="width: 18%; text-align: right;">{$rate} %</td>
					 <td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$product_tax_infos.total_amount}</td>
					 <td style="width: 18%; text-align: right;">
						 {if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$product_tax_infos.total_price_tax_excl}
					 </td>
					 <td style="width: 18%; text-align: right;">
						{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$product_tax_infos.total_price_tax_incl}
					 </td>
					</tr>
					{/foreach}
					{/if}

					{if !empty($wrapping_tax_breakdown)}
					<tr style="line-height:6px;background-color:{cycle values='#FFF,#DDD'};">
						<td style="width: 28%">{l s='Wrapping' pdf='true'}</td>
						<td style="width: 18%; text-align: right;">{$wrapping_tax_breakdown.rate} %</td>
						<td style="width: 18%; text-align: right;">{displayPrice currency=$order->id_currency price=$wrapping_tax_breakdown.total_amount}</td>
						<td style="width: 18%; text-align: right;">{displayPrice currency=$order->id_currency price=$wrapping_tax_breakdown.total_tax_excl}</td>
						<td style="width: 18%; text-align: right;">{displayPrice currency=$order->id_currency price=$wrapping_tax_breakdown.total_tax_incl}</td>
					</tr>
					{/if}

					{if isset($shipping_tax_breakdown)}
					{foreach $shipping_tax_breakdown as $shipping_tax_infos}
					<tr style="line-height:6px;background-color:{cycle values='#FFF,#DDD'};">
					 <td style="width: 28%">
						{if !isset($pdf_shipping_tax_written)}
							{l s='Shipping' pdf='true'}
							{assign var=pdf_shipping_tax_written value=1}
						{/if}
					 </td>
					 <td style="width: 18%; text-align: right;">{$shipping_tax_infos.rate} %</td>
					 <td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$shipping_tax_infos.total_amount}</td>
					 <td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$shipping_tax_infos.total_tax_excl}</td>
					 <td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$shipping_tax_infos.total_tax_incl}</td>
					</tr>
					{/foreach}
				{/if}

				{if isset($ecotax_tax_breakdown)}
					{foreach $ecotax_tax_breakdown as $ecotax_tax_infos}
						{if $ecotax_tax_infos.ecotax_tax_excl > 0}
						<tr style="line-height:6px;background-color:{cycle values='#FFF,#DDD'};">
							<td style="width: 28%">{l s='Ecotax' pdf='true'}</td>
							<td style="width: 18%; text-align: right;">{$ecotax_tax_infos.rate} %</td>
							<td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=($ecotax_tax_infos.ecotax_tax_incl - $ecotax_tax_infos.ecotax_tax_excl)}</td>
							<td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=$ecotax_tax_infos.ecotax_tax_excl}</td>
							<td style="width: 18%; text-align: right;">{if isset($is_order_slip) && $is_order_slip}- {/if}{displayPrice currency=$order->id_currency price=($ecotax_tax_infos.ecotax_tax_incl)}</td>
						</tr>
						{/if}
					{/foreach}
				{/if}
			</table>
			{/if}
		</td>
	</tr>
</table>
<!--  / TAX DETAILS -->
{/if}