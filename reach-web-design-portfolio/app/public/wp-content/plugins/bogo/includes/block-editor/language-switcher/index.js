(()=>{"use strict";const e=window.wp.element,a=window.wp.blocks,o=window.wp.blockEditor;(0,a.registerBlockType)("bogo/language-switcher",{edit:function(){var a;const n=(0,o.useBlockProps)(),t=Object.entries(null!==(a=bogo?.availableLanguages)&&void 0!==a?a:{}).map((a=>{var o;let[n,t]=a;const s=(a=>{var o;const n=["bogoflags",`bogoflags-${null!==(o=a.match(/\/(?<name>[a-z]+)\.png$/)?.groups.name)&&void 0!==o?o:"zz"}`];return(0,e.createElement)("span",{className:n.join(" ")})})(t.flag);return(0,e.createElement)("li",{key:n,className:t.tags.join(" ")},bogo.showFlags&&s,(0,e.createElement)("span",{className:"bogo-language-name"},null!==(o=t.nativename)&&void 0!==o?o:n))}));return(0,e.createElement)("div",n,(0,e.createElement)("ul",{className:"bogo-language-switcher"},t))},save:()=>{const a=o.useBlockProps.save();return(0,e.createElement)("div",a,"[bogo]")}})})();