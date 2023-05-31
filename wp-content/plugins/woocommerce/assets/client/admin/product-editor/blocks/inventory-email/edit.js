"use strict";Object.defineProperty(exports,"__esModule",{value:!0}),exports.Edit=void 0;const i18n_1=require("@wordpress/i18n"),components_1=require("@woocommerce/components"),element_1=require("@wordpress/element"),settings_1=require("@woocommerce/settings"),block_editor_1=require("@wordpress/block-editor"),components_2=require("@wordpress/components"),core_data_1=require("@wordpress/core-data");function Edit(){const e=(0,block_editor_1.useBlockProps)({className:"woocommerce-product-form__inventory-email"}),t=(0,settings_1.getSetting)("notifyLowStockAmount",2),[o,n]=(0,core_data_1.useEntityProp)("postType","product","low_stock_amount");return(0,element_1.createElement)(element_1.Fragment,null,(0,element_1.createElement)("div",{...e},(0,element_1.createElement)("div",{className:"wp-block-columns"},(0,element_1.createElement)("div",{className:"wp-block-column"},(0,element_1.createElement)(components_2.BaseControl,{id:"product_inventory_email",label:(0,i18n_1.__)("Email me when stock reaches","woocommerce"),help:(0,element_1.createInterpolateElement)((0,i18n_1.__)("Make sure to enable notifications in <link>store settings.</link>","woocommerce"),{link:(0,element_1.createElement)(components_1.Link,{href:`${(0,settings_1.getSetting)("adminUrl")}admin.php?page=wc-settings&tab=products&section=inventory`,target:"_blank",type:"external"})})},(0,element_1.createElement)(components_2.__experimentalInputControl,{name:"woocommerce-product-name",placeholder:(0,i18n_1.sprintf)((0,i18n_1.__)("%d (store default)","woocommerce"),t),onChange:n,value:o,min:0}))),(0,element_1.createElement)("div",{className:"wp-block-column"}))))}exports.Edit=Edit;