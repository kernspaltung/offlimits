jQuery(document).foundation($);
var u;

jQuery(document).ready(function($){
   u = new FrontEndUtils($);
   $('.imgLiquid.imgLiquidFill').imgLiquid();
   $('.imgLiquid.imgLiquidNoFill').imgLiquid({fill:false});
   u.vcenter();
})
