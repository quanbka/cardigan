(window.__wcAdmin_webpackJsonp=window.__wcAdmin_webpackJsonp||[]).push([[12],{520:function(e,t,r){"use strict";r.r(t);var o=r(0),a=r(2),c=r(15),n=r(1),i=r.n(n),s=r(11),l=r(7),m=r(574),d=r(555),u=r(575),b=r(552),p=r(548),_=r(556),y=r(577),g=r(549);class O extends o.Component{getChartMeta(){const{query:e,isSingleProductView:t,isSingleProductVariable:r}=this.props,o="compare-products"===e.filter&&e.products&&e.products.split(",").length>1||t&&r?"item-comparison":"time-comparison";return{compareObject:t&&r?"variations":"products",itemsLabel:t&&r?Object(a.__)("%d variations",'woocommerce'):Object(a.__)("%d products",'woocommerce'),mode:o}}render(){const{compareObject:e,itemsLabel:t,mode:r}=this.getChartMeta(),{path:a,query:c,isError:n,isRequesting:i,isSingleProductVariable:s}=this.props;if(n)return Object(o.createElement)(p.a,null);const l={...c};return"item-comparison"===r&&(l.segmentby="products"===e?"product":"variation"),Object(o.createElement)(o.Fragment,null,Object(o.createElement)(g.a,{query:c,path:a,filters:m.c,advancedFilters:m.a,report:"products"}),Object(o.createElement)(_.a,{mode:r,charts:m.b,endpoint:"products",isRequesting:i,query:l,selectedChart:Object(d.a)(c.chart,m.b),filters:m.c,advancedFilters:m.a}),Object(o.createElement)(b.a,{charts:m.b,mode:r,filters:m.c,advancedFilters:m.a,endpoint:"products",isRequesting:i,itemsLabel:t,path:a,query:l,selectedChart:Object(d.a)(l.chart,m.b)}),s?Object(o.createElement)(y.a,{baseSearchQuery:{filter:"single_product"},isRequesting:i,query:c,filters:m.c,advancedFilters:m.a}):Object(o.createElement)(u.a,{isRequesting:i,query:c,filters:m.c,advancedFilters:m.a}))}}O.propTypes={path:i.a.string.isRequired,query:i.a.object.isRequired},t.default=Object(c.compose)(Object(l.withSelect)((e,t)=>{const{query:r,isRequesting:o}=t,a=!r.search&&r.products&&1===r.products.split(",").length;if(o)return{query:{...r},isSingleProductView:a,isRequesting:o};const{getItems:c,isResolving:n,getItemsError:i}=e(s.ITEMS_STORE_NAME);if(a){const e=parseInt(r.products,10),t={include:e},o=c("products",t),s=o&&o.get(e)&&"variable"===o.get(e).type,l=n("getItems",["products",t]),m=Boolean(i("products",t));return{query:{...r,"is-variable":s},isSingleProductView:a,isRequesting:l,isSingleProductVariable:s,isError:m}}return{query:r,isSingleProductView:a}}))(O)},546:function(e,t,r){"use strict";r.d(t,"e",(function(){return d})),r.d(t,"a",(function(){return u})),r.d(t,"b",(function(){return b})),r.d(t,"c",(function(){return p})),r.d(t,"d",(function(){return _})),r.d(t,"f",(function(){return y})),r.d(t,"h",(function(){return g})),r.d(t,"g",(function(){return O}));var o=r(16),a=r(20),c=r.n(a),n=r(3),i=r(12),s=r(11),l=r(17),m=r(547);function d(e,t=n.identity){return function(r="",a){const n="function"==typeof e?e(a):e,s=Object(i.getIdsFromQuery)(r);if(s.length<1)return Promise.resolve([]);const l={include:s.join(","),per_page:s.length};return c()({path:Object(o.addQueryArgs)(n,l)}).then(e=>e.map(t))}}d(s.NAMESPACE+"/products/attributes",e=>({key:e.id,label:e.name}));const u=d(s.NAMESPACE+"/products/categories",e=>({key:e.id,label:e.name})),b=d(s.NAMESPACE+"/coupons",e=>({key:e.id,label:e.code})),p=d(s.NAMESPACE+"/customers",e=>({key:e.id,label:e.name})),_=d(s.NAMESPACE+"/products",e=>({key:e.id,label:e.name})),y=d(s.NAMESPACE+"/taxes",e=>({key:e.id,label:Object(m.a)(e)}));function g({attributes:e,name:t}){const r=Object(l.h)("variationTitleAttributesSeparator"," - ");if(t.indexOf(r)>-1)return t;const o=e.map(({option:e})=>e).join(", ");return o?t+r+o:t}const O=d(({products:e})=>e?s.NAMESPACE+`/products/${e}/variations`:s.NAMESPACE+"/variations",e=>({key:e.id,label:g(e)}))},547:function(e,t,r){"use strict";r.d(t,"a",(function(){return a}));var o=r(2);function a(e){return[e.country,e.state,e.name||Object(o.__)("TAX",'woocommerce'),e.priority].map(e=>e.toString().toUpperCase().trim()).filter(Boolean).join("-")}},559:function(e,t,r){"use strict";function o(e,t,r){return!!t&&(e&&t<=r==="instock")}r.d(t,"a",(function(){return o}))},564:function(e,t,r){"use strict";r.d(t,"a",(function(){return s}));var o=r(0),a=r(3),c=r(4),n=r(23),i=r(12);class s extends o.Component{getCategoryAncestorIds(e,t){const r=[];let o=e.parent;for(;o;)r.unshift(o),o=t.get(o).parent;return r}getCategoryAncestors(e,t){const r=this.getCategoryAncestorIds(e,t);if(r.length)return 1===r.length?t.get(Object(a.first)(r)).name+" › ":2===r.length?t.get(Object(a.first)(r)).name+" › "+t.get(Object(a.last)(r)).name+" › ":t.get(Object(a.first)(r)).name+" … "+t.get(Object(a.last)(r)).name+" › "}render(){const{categories:e,category:t,query:r}=this.props,a=Object(i.getPersistedQuery)(r);return t?Object(o.createElement)("div",{className:"woocommerce-table__breadcrumbs"},this.getCategoryAncestors(t,e),Object(o.createElement)(n.Link,{href:Object(i.getNewPath)(a,"/analytics/categories",{filter:"single_category",categories:t.id}),type:"wc-admin"},t.name)):Object(o.createElement)(c.Spinner,null)}}},574:function(e,t,r){"use strict";r.d(t,"b",(function(){return l})),r.d(t,"c",(function(){return u})),r.d(t,"a",(function(){return b}));var o=r(2),a=r(34),c=r(7),n=r(546),i=r(62);const{addCesSurveyForAnalytics:s}=Object(c.dispatch)(i.c),l=Object(a.applyFilters)("woocommerce_admin_products_report_charts",[{key:"items_sold",label:Object(o.__)("Items Sold",'woocommerce'),order:"desc",orderby:"items_sold",type:"number"},{key:"net_revenue",label:Object(o.__)("Net Sales",'woocommerce'),order:"desc",orderby:"net_revenue",type:"currency"},{key:"orders_count",label:Object(o.__)("Orders",'woocommerce'),order:"desc",orderby:"orders_count",type:"number"}]),m={label:Object(o.__)("Show",'woocommerce'),staticParams:["chartType","paged","per_page"],param:"filter",showFilters:()=>!0,filters:[{label:Object(o.__)("All Products",'woocommerce'),value:"all"},{label:Object(o.__)("Single Product",'woocommerce'),value:"select_product",chartMode:"item-comparison",subFilters:[{component:"Search",value:"single_product",chartMode:"item-comparison",path:["select_product"],settings:{type:"products",param:"products",getLabels:n.d,labels:{placeholder:Object(o.__)("Type to search for a product",'woocommerce'),button:Object(o.__)("Single Product",'woocommerce')}}}]},{label:Object(o.__)("Comparison",'woocommerce'),value:"compare-products",chartMode:"item-comparison",settings:{type:"products",param:"products",getLabels:n.d,labels:{helpText:Object(o.__)("Check at least two products below to compare",'woocommerce'),placeholder:Object(o.__)("Search for products to compare",'woocommerce'),title:Object(o.__)("Compare Products",'woocommerce'),update:Object(o.__)("Compare",'woocommerce')},onClick:s}}]},d={showFilters:e=>"single_product"===e.filter&&!!e.products&&e["is-variable"],staticParams:["filter","products","chartType","paged","per_page"],param:"filter-variations",filters:[{label:Object(o.__)("All Variations",'woocommerce'),chartMode:"item-comparison",value:"all"},{label:Object(o.__)("Single Variation",'woocommerce'),value:"select_variation",subFilters:[{component:"Search",value:"single_variation",path:["select_variation"],settings:{type:"variations",param:"variations",getLabels:n.g,labels:{placeholder:Object(o.__)("Type to search for a variation",'woocommerce'),button:Object(o.__)("Single Variation",'woocommerce')}}}]},{label:Object(o.__)("Comparison",'woocommerce'),chartMode:"item-comparison",value:"compare-variations",settings:{type:"variations",param:"variations",getLabels:n.g,labels:{helpText:Object(o.__)("Check at least two variations below to compare",'woocommerce'),placeholder:Object(o.__)("Search for variations to compare",'woocommerce'),title:Object(o.__)("Compare Variations",'woocommerce'),update:Object(o.__)("Compare",'woocommerce')}}}]},u=Object(a.applyFilters)("woocommerce_admin_products_report_filters",[m,d]),b=Object(a.applyFilters)("woocommerce_admin_products_report_advanced_filters",{})},575:function(e,t,r){"use strict";var o=r(0),a=r(2),c=r(15),n=r(32),i=r(7),s=r(3),l=r(12),m=r(23),d=r(139),u=r(17),b=r(11),p=r(564),_=r(559),y=r(550),g=r(545);r(576);const O=Object(u.h)("manageStock","no"),j=Object(u.h)("stockStatuses",{});class h extends o.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:Object(a.__)("Product Title",'woocommerce'),key:"product_name",required:!0,isLeftAligned:!0,isSortable:!0},{label:Object(a.__)("SKU",'woocommerce'),key:"sku",hiddenByDefault:!0,isSortable:!0},{label:Object(a.__)("Items Sold",'woocommerce'),key:"items_sold",required:!0,defaultSort:!0,isSortable:!0,isNumeric:!0},{label:Object(a.__)("Net Sales",'woocommerce'),screenReaderLabel:Object(a.__)("Net Sales",'woocommerce'),key:"net_revenue",required:!0,isSortable:!0,isNumeric:!0},{label:Object(a.__)("Orders",'woocommerce'),key:"orders_count",isSortable:!0,isNumeric:!0},{label:Object(a.__)("Category",'woocommerce'),key:"product_cat"},{label:Object(a.__)("Variations",'woocommerce'),key:"variations",isSortable:!0},"yes"===O?{label:Object(a.__)("Status",'woocommerce'),key:"stock_status"}:null,"yes"===O?{label:Object(a.__)("Stock",'woocommerce'),key:"stock",isNumeric:!0}:null].filter(Boolean)}getRowsContent(e=[]){const{query:t}=this.props,r=Object(l.getPersistedQuery)(t),{render:c,formatDecimal:i,getCurrencyConfig:b}=this.context,y=b();return Object(s.map)(e,e=>{const{product_id:s,items_sold:b,net_revenue:g,orders_count:h}=e,f=e.extended_info||{},{category_ids:w,low_stock_amount:v,manage_stock:S,sku:C,stock_status:k,stock_quantity:E,variations:q=[]}=f,A=Object(n.decodeEntities)(f.name),P=Object(l.getNewPath)(r,"/analytics/orders",{filter:"advanced",product_includes:s}),R=Object(l.getNewPath)(r,"/analytics/products",{filter:"single_product",products:s}),{categories:N}=this.props,x=w&&w.map(e=>N.get(e)).filter(Boolean)||[],V=Object(_.a)(k,E,v)?Object(o.createElement)(m.Link,{href:Object(u.g)("post.php?action=edit&post="+s),type:"wp-admin"},Object(a._x)("Low","Indication of a low quantity",'woocommerce')):j[k];return[{display:Object(o.createElement)(m.Link,{href:R,type:"wc-admin"},A),value:A},{display:C,value:C},{display:Object(d.formatValue)(y,"number",b),value:b},{display:c(g),value:i(g)},{display:Object(o.createElement)(m.Link,{href:P,type:"wc-admin"},h),value:h},{display:Object(o.createElement)("div",{className:"woocommerce-table__product-categories"},x[0]&&Object(o.createElement)(p.a,{category:x[0],categories:N}),x.length>1&&Object(o.createElement)(m.Tag,{label:Object(a.sprintf)(Object(a._x)("+%d more","categories",'woocommerce'),x.length-1),popoverContents:x.map(e=>Object(o.createElement)(p.a,{category:e,categories:N,key:e.id,query:t}))})),value:x.map(e=>e.name).join(", ")},{display:Object(d.formatValue)(y,"number",q.length),value:q.length},"yes"===O?{display:S?V:Object(a.__)("N/A",'woocommerce'),value:S?j[k]:null}:null,"yes"===O?{display:S?Object(d.formatValue)(y,"number",E):Object(a.__)("N/A",'woocommerce'),value:E}:null].filter(Boolean)})}getSummary(e){const{products_count:t=0,items_sold:r=0,net_revenue:o=0,orders_count:c=0}=e,{formatAmount:n,getCurrencyConfig:i}=this.context,s=i();return[{label:Object(a._n)("product","products",t,'woocommerce'),value:Object(d.formatValue)(s,"number",t)},{label:Object(a._n)("item sold","items sold",r,'woocommerce'),value:Object(d.formatValue)(s,"number",r)},{label:Object(a.__)("net sales",'woocommerce'),value:n(o)},{label:Object(a._n)("orders","orders",c,'woocommerce'),value:Object(d.formatValue)(s,"number",c)}]}render(){const{advancedFilters:e,baseSearchQuery:t,filters:r,hideCompare:c,isRequesting:n,query:i}=this.props,s={helpText:Object(a.__)("Check at least two products below to compare",'woocommerce'),placeholder:Object(a.__)("Search by product name or SKU",'woocommerce')};return Object(o.createElement)(y.a,{compareBy:c?void 0:"products",endpoint:"products",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,getSummary:this.getSummary,summaryFields:["products_count","items_sold","net_revenue","orders_count"],itemIdField:"product_id",isRequesting:n,labels:s,query:i,searchBy:"products",baseSearchQuery:t,tableQuery:{orderby:i.orderby||"items_sold",order:i.order||"desc",extended_info:!0,segmentby:i.segmentby},title:Object(a.__)("Products",'woocommerce'),columnPrefsKey:"products_report_columns",filters:r,advancedFilters:e})}}h.contextType=g.a,t.a=Object(c.compose)(Object(i.withSelect)((e,t)=>{const{query:r,isRequesting:o}=t;if(o||r.search&&(!r.products||!r.products.length))return{};const{getItems:a,getItemsError:c,isResolving:n}=e(b.ITEMS_STORE_NAME),i={per_page:-1};return{categories:a("categories",i),isError:Boolean(c("categories",i)),isRequesting:n("getItems",["categories",i])}}))(h)},576:function(e,t,r){},577:function(e,t,r){"use strict";var o=r(0),a=r(2),c=r(3),n=r(23),i=r(12),s=r(139),l=r(17),m=r(550),d=r(559),u=r(545),b=r(546);const p=Object(l.h)("manageStock","no"),_=Object(l.h)("stockStatuses",{});class y extends o.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:Object(a.__)("Product / Variation Title",'woocommerce'),key:"name",required:!0,isLeftAligned:!0},{label:Object(a.__)("SKU",'woocommerce'),key:"sku",hiddenByDefault:!0,isSortable:!0},{label:Object(a.__)("Items Sold",'woocommerce'),key:"items_sold",required:!0,defaultSort:!0,isSortable:!0,isNumeric:!0},{label:Object(a.__)("Net Sales",'woocommerce'),screenReaderLabel:Object(a.__)("Net Sales",'woocommerce'),key:"net_revenue",required:!0,isSortable:!0,isNumeric:!0},{label:Object(a.__)("Orders",'woocommerce'),key:"orders_count",isSortable:!0,isNumeric:!0},"yes"===p?{label:Object(a.__)("Status",'woocommerce'),key:"stock_status"}:null,"yes"===p?{label:Object(a.__)("Stock",'woocommerce'),key:"stock",isNumeric:!0}:null].filter(Boolean)}getRowsContent(e=[]){const{query:t}=this.props,r=Object(i.getPersistedQuery)(t),{formatAmount:m,formatDecimal:u,getCurrencyConfig:y}=this.context;return Object(c.map)(e,e=>{const{items_sold:t,net_revenue:c,orders_count:g,product_id:O,variation_id:j}=e,h=e.extended_info||{},{stock_status:f,stock_quantity:w,low_stock_amount:v,sku:S}=h,C=(k=e,Object(b.h)(k.extended_info||{}));var k;const E=Object(i.getNewPath)(r,"/analytics/orders",{filter:"advanced",variation_includes:j}),q=Object(l.g)(`post.php?post=${O}&action=edit`);return[{display:Object(o.createElement)(n.Link,{href:q,type:"wp-admin"},C),value:C},{display:S,value:S},{display:Object(s.formatValue)(y(),"number",t),value:t},{display:m(c),value:u(c)},{display:Object(o.createElement)(n.Link,{href:E,type:"wc-admin"},g),value:g},"yes"===p?{display:Object(d.a)(f,w,v)?Object(o.createElement)(n.Link,{href:q,type:"wp-admin"},Object(a._x)("Low","Indication of a low quantity",'woocommerce')):_[f],value:_[f]}:null,"yes"===p?{display:w,value:w}:null].filter(Boolean)})}getSummary(e){const{variations_count:t=0,items_sold:r=0,net_revenue:o=0,orders_count:c=0}=e,{formatAmount:n,getCurrencyConfig:i}=this.context,l=i();return[{label:Object(a._n)("variation sold","variations sold",t,'woocommerce'),value:Object(s.formatValue)(l,"number",t)},{label:Object(a._n)("item sold","items sold",r,'woocommerce'),value:Object(s.formatValue)(l,"number",r)},{label:Object(a.__)("net sales",'woocommerce'),value:n(o)},{label:Object(a._n)("orders","orders",c,'woocommerce'),value:Object(s.formatValue)(l,"number",c)}]}render(){const{advancedFilters:e,baseSearchQuery:t,filters:r,isRequesting:c,query:n}=this.props,i={helpText:Object(a.__)("Check at least two variations below to compare",'woocommerce'),placeholder:Object(a.__)("Search by variation name or SKU",'woocommerce')};return Object(o.createElement)(m.a,{baseSearchQuery:t,compareBy:"variations",compareParam:"filter-variations",endpoint:"variations",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,isRequesting:c,itemIdField:"variation_id",labels:i,query:n,getSummary:this.getSummary,summaryFields:["variations_count","items_sold","net_revenue","orders_count"],tableQuery:{orderby:n.orderby||"items_sold",order:n.order||"desc",extended_info:!0,product_includes:n.products,variations:n.variations},title:Object(a.__)("Variations",'woocommerce'),columnPrefsKey:"variations_report_columns",filters:r,advancedFilters:e})}}y.contextType=u.a,t.a=y}}]);