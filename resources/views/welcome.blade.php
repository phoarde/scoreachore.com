<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Score a Chore</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
            ...
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <style>
            /*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
            @layer theme{:root,:host{ --font-sans: Inter, sans-serif;--font-sans:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-green-600:oklch(.627 .194 149.214);--color-gray-900:oklch(.21 .034 264.665);--color-zinc-50:oklch(.985 0 0);--color-zinc-200:oklch(.92 .004 286.32);--color-zinc-400:oklch(.705 .015 286.067);--color-zinc-500:oklch(.552 .016 285.938);--color-zinc-600:oklch(.442 .017 285.786);--color-zinc-700:oklch(.37 .013 285.805);--color-zinc-800:oklch(.274 .006 286.033);--color-zinc-900:oklch(.21 .006 285.885);--color-neutral-100:oklch(.97 0 0);--color-neutral-200:oklch(.922 0 0);--color-neutral-700:oklch(.371 0 0);--color-neutral-800:oklch(.269 0 0);--color-neutral-900:oklch(.205 0 0);--color-neutral-950:oklch(.145 0 0);--color-stone-800:oklch(.268 .007 34.298);--color-stone-950:oklch(.147 .004 49.25);--color-black:#000;--color-white:#fff;--spacing:.25rem;--container-sm:24rem;--container-md:28rem;--container-lg:32rem;--container-4xl:56rem;--text-xs:.75rem;--text-xs--line-height:calc(1/.75);--text-sm:.875rem;--text-sm--line-height:calc(1.25/.875);--text-lg:1.125rem;--text-lg--line-height:calc(1.75/1.125);--font-weight-normal:400;--font-weight-medium:500;--font-weight-semibold:600;--leading-tight:1.25;--leading-normal:1.5;--radius-sm:.25rem;--radius-md:.375rem;--radius-lg:.5rem;--radius-xl:.75rem;--aspect-video:16/9;--default-transition-duration:.15s;--default-transition-timing-function:cubic-bezier(.4,0,.2,1);--default-font-family:var(--font-sans);--default-font-feature-settings:var(--font-sans--font-feature-settings);--default-font-variation-settings:var(--font-sans--font-variation-settings);--default-mono-font-family:var(--font-mono);--default-mono-font-feature-settings:var(--font-mono--font-feature-settings);--default-mono-font-variation-settings:var(--font-mono--font-variation-settings)}}@layer base{*,:after,:before,::backdrop{box-sizing:border-box;border:0 solid;margin:0;padding:0}::file-selector-button{box-sizing:border-box;border:0 solid;margin:0;padding:0}html,:host{-webkit-text-size-adjust:100%;tab-size:4;line-height:1.5;font-family:var(--default-font-family,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji");font-feature-settings:var(--default-font-feature-settings,normal);font-variation-settings:var(--default-font-variation-settings,normal);-webkit-tap-highlight-color:transparent}body{line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;-webkit-text-decoration:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:var(--default-mono-font-family,ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace);font-feature-settings:var(--default-mono-font-feature-settings,normal);font-variation-settings:var(--default-mono-font-variation-settings,normal);font-size:1em}small{font-size:80%}sub,sup{vertical-align:baseline;font-size:75%;line-height:0;position:relative}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}:-moz-focusring{outline:auto}progress{vertical-align:baseline}summary{display:list-item}ol,ul,menu{list-style:none}img,svg,video,canvas,audio,iframe,embed,object{vertical-align:middle;display:block}img,video{max-width:100%;height:auto}button,input,select,optgroup,textarea{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}::file-selector-button{font:inherit;font-feature-settings:inherit;font-variation-settings:inherit;letter-spacing:inherit;color:inherit;opacity:1;background-color:#0000;border-radius:0}:where(select:is([multiple],[size])) optgroup{font-weight:bolder}:where(select:is([multiple],[size])) optgroup option{padding-inline-start:20px}::file-selector-button{margin-inline-end:4px}::placeholder{opacity:1;color:color-mix(in oklab,currentColor 50%,transparent)}textarea{resize:vertical}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-date-and-time-value{min-height:1lh;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-datetime-edit{padding-block:0}::-webkit-datetime-edit-year-field{padding-block:0}::-webkit-datetime-edit-month-field{padding-block:0}::-webkit-datetime-edit-day-field{padding-block:0}::-webkit-datetime-edit-hour-field{padding-block:0}::-webkit-datetime-edit-minute-field{padding-block:0}::-webkit-datetime-edit-second-field{padding-block:0}::-webkit-datetime-edit-millisecond-field{padding-block:0}::-webkit-datetime-edit-meridiem-field{padding-block:0}:-moz-ui-invalid{box-shadow:none}button,input:where([type=button],[type=reset],[type=submit]){appearance:button}::file-selector-button{appearance:button}::-webkit-inner-spin-button{height:auto}::-webkit-outer-spin-button{height:auto}[hidden]:where(:not([hidden=until-found])){display:none!important}}@layer components;@layer utilities{.sr-only{clip:rect(0,0,0,0);white-space:nowrap;border-width:0;width:1px;height:1px;margin:-1px;padding:0;position:absolute;overflow:hidden}.absolute{position:absolute}.relative{position:relative}.static{position:static}.sticky{position:sticky}.inset-0{inset:calc(var(--spacing)*0)}.inset-y-\[3px\]{inset-block:3px}.start-0{inset-inline-start:calc(var(--spacing)*0)}.end-0{inset-inline-end:calc(var(--spacing)*0)}.top-0{top:calc(var(--spacing)*0)}.z-20{z-index:20}.container{width:100%}@media (width>=40rem){.container{max-width:40rem}}@media (width>=48rem){.container{max-width:48rem}}@media (width>=64rem){.container{max-width:64rem}}@media (width>=80rem){.container{max-width:80rem}}@media (width>=96rem){.container{max-width:96rem}}.mx-auto{margin-inline:auto}.my-6{margin-block:calc(var(--spacing)*6)}.-ms-8{margin-inline-start:calc(var(--spacing)*-8)}.ms-1{margin-inline-start:calc(var(--spacing)*1)}.ms-2{margin-inline-start:calc(var(--spacing)*2)}.ms-4{margin-inline-start:calc(var(--spacing)*4)}.me-1\.5{margin-inline-end:calc(var(--spacing)*1.5)}.me-2{margin-inline-end:calc(var(--spacing)*2)}.me-3{margin-inline-end:calc(var(--spacing)*3)}.me-5{margin-inline-end:calc(var(--spacing)*5)}.me-10{margin-inline-end:calc(var(--spacing)*10)}.-mt-\[4\.9rem\]{margin-top:-4.9rem}.mt-2{margin-top:calc(var(--spacing)*2)}.mt-4{margin-top:calc(var(--spacing)*4)}.mt-5{margin-top:calc(var(--spacing)*5)}.mt-6{margin-top:calc(var(--spacing)*6)}.mt-10{margin-top:calc(var(--spacing)*10)}.mt-auto{margin-top:auto}.-mb-px{margin-bottom:-1px}.mb-0\.5{margin-bottom:calc(var(--spacing)*.5)}.mb-1{margin-bottom:calc(var(--spacing)*1)}.mb-2{margin-bottom:calc(var(--spacing)*2)}.mb-4{margin-bottom:calc(var(--spacing)*4)}.mb-5{margin-bottom:calc(var(--spacing)*5)}.mb-6{margin-bottom:calc(var(--spacing)*6)}.mb-\[2px\]{margin-bottom:2px}.block{display:block}.contents{display:contents}.flex{display:flex}.grid{display:grid}.hidden{display:none}.inline-block{display:inline-block}.inline-flex{display:inline-flex}.table{display:table}.aspect-\[335\/376\]{aspect-ratio:335/376}.aspect-square{aspect-ratio:1}.aspect-video{aspect-ratio:var(--aspect-video)}.size-3\!{width:calc(var(--spacing)*3)!important;height:calc(var(--spacing)*3)!important}.size-5{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}.size-8{width:calc(var(--spacing)*8);height:calc(var(--spacing)*8)}.size-9{width:calc(var(--spacing)*9);height:calc(var(--spacing)*9)}.size-full{width:100%;height:100%}.\!h-10{height:calc(var(--spacing)*10)!important}.h-1\.5{height:calc(var(--spacing)*1.5)}.h-2\.5{height:calc(var(--spacing)*2.5)}.h-3\.5{height:calc(var(--spacing)*3.5)}.h-7{height:calc(var(--spacing)*7)}.h-8{height:calc(var(--spacing)*8)}.h-9{height:calc(var(--spacing)*9)}.h-10{height:calc(var(--spacing)*10)}.h-14\.5{height:calc(var(--spacing)*14.5)}.h-dvh{height:100dvh}.h-full{height:100%}.min-h-screen{min-height:100vh}.min-h-svh{min-height:100svh}.w-1\.5{width:calc(var(--spacing)*1.5)}.w-2\.5{width:calc(var(--spacing)*2.5)}.w-3\.5{width:calc(var(--spacing)*3.5)}.w-8{width:calc(var(--spacing)*8)}.w-9{width:calc(var(--spacing)*9)}.w-10{width:calc(var(--spacing)*10)}.w-\[220px\]{width:220px}.w-\[448px\]{width:448px}.w-full{width:100%}.w-px{width:1px}.max-w-\[335px\]{max-width:335px}.max-w-lg{max-width:var(--container-lg)}.max-w-md{max-width:var(--container-md)}.max-w-none{max-width:none}.max-w-sm{max-width:var(--container-sm)}.flex-1{flex:1}.shrink-0{flex-shrink:0}.translate-y-0{--tw-translate-y:calc(var(--spacing)*0);translate:var(--tw-translate-x)var(--tw-translate-y)}.cursor-pointer{cursor:pointer}.auto-rows-min{grid-auto-rows:min-content}.flex-col{flex-direction:column}.flex-col-reverse{flex-direction:column-reverse}.items-center{align-items:center}.items-start{align-items:flex-start}.justify-between{justify-content:space-between}.justify-center{justify-content:center}.justify-end{justify-content:flex-end}.gap-2{gap:calc(var(--spacing)*2)}.gap-3{gap:calc(var(--spacing)*3)}.gap-4{gap:calc(var(--spacing)*4)}.gap-6{gap:calc(var(--spacing)*6)}:where(.space-y-2>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*2)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-3>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*3)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*3)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-6>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));margin-block-end:calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))}:where(.space-y-\[2px\]>:not(:last-child)){--tw-space-y-reverse:0;margin-block-start:calc(2px*var(--tw-space-y-reverse));margin-block-end:calc(2px*calc(1 - var(--tw-space-y-reverse)))}:where(.space-x-0\.5>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*.5)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*.5)*calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-1>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))}:where(.space-x-2>:not(:last-child)){--tw-space-x-reverse:0;margin-inline-start:calc(calc(var(--spacing)*2)*var(--tw-space-x-reverse));margin-inline-end:calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-x-reverse)))}.self-stretch{align-self:stretch}.truncate{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.overflow-hidden{overflow:hidden}.rounded-full{border-radius:3.40282e38px}.rounded-lg{border-radius:var(--radius-lg)}.rounded-md{border-radius:var(--radius-md)}.rounded-sm{border-radius:var(--radius-sm)}.rounded-xl{border-radius:var(--radius-xl)}.rounded-ee-lg{border-end-end-radius:var(--radius-lg)}.rounded-es-lg{border-end-start-radius:var(--radius-lg)}.rounded-t-lg{border-top-left-radius:var(--radius-lg);border-top-right-radius:var(--radius-lg)}.border{border-style:var(--tw-border-style);border-width:1px}.border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.border-b{border-bottom-style:var(--tw-border-style);border-bottom-width:1px}.border-\[\#19140035\]{border-color:#19140035}.border-\[\#e3e3e0\]{border-color:#e3e3e0}.border-black{border-color:var(--color-black)}.border-neutral-200{border-color:var(--color-neutral-200)}.border-transparent{border-color:#0000}.border-zinc-200{border-color:var(--color-zinc-200)}.bg-\[\#1b1b18\]{background-color:#1b1b18}.bg-\[\#FDFDFC\]{background-color:#fdfdfc}.bg-\[\#dbdbd7\]{background-color:#dbdbd7}.bg-\[\#fff2f2\]{background-color:#fff2f2}.bg-neutral-100{background-color:var(--color-neutral-100)}.bg-neutral-200{background-color:var(--color-neutral-200)}.bg-neutral-900{background-color:var(--color-neutral-900)}.bg-white{background-color:var(--color-white)}.bg-zinc-50{background-color:var(--color-zinc-50)}.bg-zinc-200{background-color:var(--color-zinc-200)}.fill-current{fill:currentColor}.stroke-gray-900\/20{stroke:color-mix(in oklab,var(--color-gray-900)20%,transparent)}.p-0{padding:calc(var(--spacing)*0)}.p-6{padding:calc(var(--spacing)*6)}.p-10{padding:calc(var(--spacing)*10)}.px-1{padding-inline:calc(var(--spacing)*1)}.px-5{padding-inline:calc(var(--spacing)*5)}.px-8{padding-inline:calc(var(--spacing)*8)}.px-10{padding-inline:calc(var(--spacing)*10)}.py-0\!{padding-block:calc(var(--spacing)*0)!important}.py-1{padding-block:calc(var(--spacing)*1)}.py-1\.5{padding-block:calc(var(--spacing)*1.5)}.py-2{padding-block:calc(var(--spacing)*2)}.py-8{padding-block:calc(var(--spacing)*8)}.ps-3{padding-inline-start:calc(var(--spacing)*3)}.ps-7{padding-inline-start:calc(var(--spacing)*7)}.pe-4{padding-inline-end:calc(var(--spacing)*4)}.pb-4{padding-bottom:calc(var(--spacing)*4)}.pb-12{padding-bottom:calc(var(--spacing)*12)}.text-center{text-align:center}.text-start{text-align:start}.text-lg{font-size:var(--text-lg);line-height:var(--tw-leading,var(--text-lg--line-height))}.text-sm{font-size:var(--text-sm);line-height:var(--tw-leading,var(--text-sm--line-height))}.text-xs{font-size:var(--text-xs);line-height:var(--tw-leading,var(--text-xs--line-height))}.text-\[13px\]{font-size:13px}.leading-\[20px\]{--tw-leading:20px;line-height:20px}.leading-none{--tw-leading:1;line-height:1}.leading-normal{--tw-leading:var(--leading-normal);line-height:var(--leading-normal)}.leading-tight{--tw-leading:var(--leading-tight);line-height:var(--leading-tight)}.font-medium{--tw-font-weight:var(--font-weight-medium);font-weight:var(--font-weight-medium)}.font-normal{--tw-font-weight:var(--font-weight-normal);font-weight:var(--font-weight-normal)}.font-semibold{--tw-font-weight:var(--font-weight-semibold);font-weight:var(--font-weight-semibold)}.\!text-green-600{color:var(--color-green-600)!important}.text-\[\#1b1b18\]{color:#1b1b18}.text-\[\#706f6c\]{color:#706f6c}.text-\[\#F53003\],.text-\[\#f53003\]{color:#f53003}.text-black{color:var(--color-black)}.text-green-600{color:var(--color-green-600)}.text-stone-800{color:var(--color-stone-800)}.text-white{color:var(--color-white)}.text-zinc-400{color:var(--color-zinc-400)}.text-zinc-500{color:var(--color-zinc-500)}.text-zinc-600{color:var(--color-zinc-600)}.lowercase{text-transform:lowercase}.underline{text-decoration-line:underline}.underline-offset-4{text-underline-offset:4px}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\]{--tw-shadow:0px 0px 1px 0px var(--tw-shadow-color,#00000008),0px 1px 2px 0px var(--tw-shadow-color,#0000000f);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#1a1a0029);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.shadow-xs{--tw-shadow:0 1px 2px 0 var(--tw-shadow-color,#0000000d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.outline{outline-style:var(--tw-outline-style);outline-width:1px}.transition-all{transition-property:all;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.transition-opacity{transition-property:opacity;transition-timing-function:var(--tw-ease,var(--default-transition-timing-function));transition-duration:var(--tw-duration,var(--default-transition-duration))}.delay-300{transition-delay:.3s}.duration-750{--tw-duration:.75s;transition-duration:.75s}.not-has-\[nav\]\:hidden:not(:has(:is(nav))){display:none}.group-data-open\/disclosure-button\:block:is(:where(.group\/disclosure-button)[data-open] *){display:block}.group-data-open\/disclosure-button\:hidden:is(:where(.group\/disclosure-button)[data-open] *){display:none}.before\:absolute:before{content:var(--tw-content);position:absolute}.before\:start-\[0\.4rem\]:before{content:var(--tw-content);inset-inline-start:.4rem}.before\:top-0:before{content:var(--tw-content);top:calc(var(--spacing)*0)}.before\:top-1\/2:before{content:var(--tw-content);top:50%}.before\:bottom-0:before{content:var(--tw-content);bottom:calc(var(--spacing)*0)}.before\:bottom-1\/2:before{content:var(--tw-content);bottom:50%}.before\:left-\[0\.4rem\]:before{content:var(--tw-content);left:.4rem}.before\:border-l:before{content:var(--tw-content);border-left-style:var(--tw-border-style);border-left-width:1px}.before\:border-\[\#e3e3e0\]:before{content:var(--tw-content);border-color:#e3e3e0}@media (hover:hover){.hover\:border-\[\#1915014a\]:hover{border-color:#1915014a}.hover\:border-\[\#19140035\]:hover{border-color:#19140035}.hover\:border-black:hover{border-color:var(--color-black)}.hover\:bg-black:hover{background-color:var(--color-black)}.hover\:bg-zinc-800\/5:hover{background-color:color-mix(in oklab,var(--color-zinc-800)5%,transparent)}.hover\:text-zinc-800:hover{color:var(--color-zinc-800)}}.data-open\:block[data-open]{display:block}@media (width<64rem){.max-lg\:hidden{display:none}}@media (width<48rem){.max-md\:flex-col{flex-direction:column}.max-md\:pt-6{padding-top:calc(var(--spacing)*6)}}@media (width>=40rem){.sm\:w-\[350px\]{width:350px}.sm\:px-0{padding-inline:calc(var(--spacing)*0)}}@media (width>=48rem){.md\:hidden{display:none}.md\:w-\[220px\]{width:220px}.md\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.md\:p-10{padding:calc(var(--spacing)*10)}}@media (width>=64rem){.lg\:-ms-px{margin-inline-start:-1px}.lg\:ms-0{margin-inline-start:calc(var(--spacing)*0)}.lg\:-mt-\[6\.6rem\]{margin-top:-6.6rem}.lg\:mb-0{margin-bottom:calc(var(--spacing)*0)}.lg\:mb-6{margin-bottom:calc(var(--spacing)*6)}.lg\:block{display:block}.lg\:flex{display:flex}.lg\:hidden{display:none}.lg\:aspect-auto{aspect-ratio:auto}.lg\:h-8{height:calc(var(--spacing)*8)}.lg\:w-\[438px\]{width:438px}.lg\:max-w-4xl{max-width:var(--container-4xl)}.lg\:max-w-none{max-width:none}.lg\:grow{flex-grow:1}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:flex-row{flex-direction:row}.lg\:justify-center{justify-content:center}.lg\:rounded-ss-lg{border-start-start-radius:var(--radius-lg)}.lg\:rounded-e-lg{border-start-end-radius:var(--radius-lg);border-end-end-radius:var(--radius-lg)}.lg\:rounded-e-lg\!{border-start-end-radius:var(--radius-lg)!important;border-end-end-radius:var(--radius-lg)!important}.lg\:rounded-ee-none{border-end-end-radius:0}.lg\:rounded-t-none{border-top-left-radius:0;border-top-right-radius:0}.lg\:p-8{padding:calc(var(--spacing)*8)}.lg\:p-20{padding:calc(var(--spacing)*20)}.lg\:px-0{padding-inline:calc(var(--spacing)*0)}}:where(.rtl\:space-x-reverse:where(:dir(rtl),[dir=rtl],[dir=rtl] *)>:not(:last-child)){--tw-space-x-reverse:1}@media (prefers-color-scheme:dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-r{border-right-style:var(--tw-border-style);border-right-width:1px}.dark\:border-\[\#3E3E3A\]{border-color:#3e3e3a}.dark\:border-\[\#eeeeec\]{border-color:#eeeeec}.dark\:border-neutral-700{border-color:var(--color-neutral-700)}.dark\:border-neutral-800{border-color:var(--color-neutral-800)}.dark\:border-stone-800{border-color:var(--color-stone-800)}.dark\:border-zinc-700{border-color:var(--color-zinc-700)}.dark\:bg-\[\#0a0a0a\]{background-color:#0a0a0a}.dark\:bg-\[\#1D0002\]{background-color:#1d0002}.dark\:bg-\[\#3E3E3A\]{background-color:#3e3e3a}.dark\:bg-\[\#161615\]{background-color:#161615}.dark\:bg-\[\#eeeeec\]{background-color:#eeeeec}.dark\:bg-neutral-700{background-color:var(--color-neutral-700)}.dark\:bg-stone-950{background-color:var(--color-stone-950)}.dark\:bg-white\/30{background-color:color-mix(in oklab,var(--color-white)30%,transparent)}.dark\:bg-zinc-800{background-color:var(--color-zinc-800)}.dark\:bg-zinc-900{background-color:var(--color-zinc-900)}.dark\:bg-linear-to-b{--tw-gradient-position:to bottom in oklab;background-image:linear-gradient(var(--tw-gradient-stops))}.dark\:from-neutral-950{--tw-gradient-from:var(--color-neutral-950);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:to-neutral-900{--tw-gradient-to:var(--color-neutral-900);--tw-gradient-stops:var(--tw-gradient-via-stops,var(--tw-gradient-position),var(--tw-gradient-from)var(--tw-gradient-from-position),var(--tw-gradient-to)var(--tw-gradient-to-position))}.dark\:stroke-neutral-100\/20{stroke:color-mix(in oklab,var(--color-neutral-100)20%,transparent)}.dark\:text-\[\#1C1C1A\]{color:#1c1c1a}.dark\:text-\[\#A1A09A\]{color:#a1a09a}.dark\:text-\[\#EDEDEC\]{color:#ededec}.dark\:text-\[\#F61500\]{color:#f61500}.dark\:text-\[\#FF4433\]{color:#f43}.dark\:text-black{color:var(--color-black)}.dark\:text-white{color:var(--color-white)}.dark\:text-white\/80{color:color-mix(in oklab,var(--color-white)80%,transparent)}.dark\:text-zinc-400{color:var(--color-zinc-400)}.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\]{--tw-shadow:inset 0px 0px 0px 1px var(--tw-shadow-color,#fffaed2d);box-shadow:var(--tw-inset-shadow),var(--tw-inset-ring-shadow),var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow)}.dark\:before\:border-\[\#3E3E3A\]:before{content:var(--tw-content);border-color:#3e3e3a}@media (hover:hover){.dark\:hover\:border-\[\#3E3E3A\]:hover{border-color:#3e3e3a}.dark\:hover\:border-\[\#62605b\]:hover{border-color:#62605b}.dark\:hover\:border-white:hover{border-color:var(--color-white)}.dark\:hover\:bg-white:hover{background-color:var(--color-white)}.dark\:hover\:bg-white\/\[7\%\]:hover{background-color:color-mix(in oklab,var(--color-white)7%,transparent)}.dark\:hover\:text-white:hover{color:var(--color-white)}}}@starting-style{.starting\:translate-y-4{--tw-translate-y:calc(var(--spacing)*4);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:translate-y-6{--tw-translate-y:calc(var(--spacing)*6);translate:var(--tw-translate-x)var(--tw-translate-y)}}@starting-style{.starting\:opacity-0{opacity:0}}.\[\&\>div\>svg\]\:size-5>div>svg{width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-4){width:calc(var(--spacing)*4);height:calc(var(--spacing)*4)}:where(.\[\:where\(\&\)\]\:size-5){width:calc(var(--spacing)*5);height:calc(var(--spacing)*5)}:where(.\[\:where\(\&\)\]\:size-6){width:calc(var(--spacing)*6);height:calc(var(--spacing)*6)}}@property --tw-translate-x{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-y{syntax:"*";inherits:false;initial-value:0}@property --tw-translate-z{syntax:"*";inherits:false;initial-value:0}@property --tw-space-y-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-space-x-reverse{syntax:"*";inherits:false;initial-value:0}@property --tw-border-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-leading{syntax:"*";inherits:false}@property --tw-font-weight{syntax:"*";inherits:false}@property --tw-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-shadow-color{syntax:"*";inherits:false}@property --tw-inset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-shadow-color{syntax:"*";inherits:false}@property --tw-ring-color{syntax:"*";inherits:false}@property --tw-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-inset-ring-color{syntax:"*";inherits:false}@property --tw-inset-ring-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-ring-inset{syntax:"*";inherits:false}@property --tw-ring-offset-width{syntax:"<length>";inherits:false;initial-value:0}@property --tw-ring-offset-color{syntax:"*";inherits:false;initial-value:#fff}@property --tw-ring-offset-shadow{syntax:"*";inherits:false;initial-value:0 0 #0000}@property --tw-outline-style{syntax:"*";inherits:false;initial-value:solid}@property --tw-duration{syntax:"*";inherits:false}@property --tw-content{syntax:"*";inherits:false;initial-value:""}@property --tw-gradient-position{syntax:"*";inherits:false}@property --tw-gradient-from{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-via{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-to{syntax:"<color>";inherits:false;initial-value:#0000}@property --tw-gradient-stops{syntax:"*";inherits:false}@property --tw-gradient-via-stops{syntax:"*";inherits:false}@property --tw-gradient-from-position{syntax:"<length-percentage>";inherits:false;initial-value:0%}@property --tw-gradient-via-position{syntax:"<length-percentage>";inherits:false;initial-value:50%}@property --tw-gradient-to-position{syntax:"<length-percentage>";inherits:false;initial-value:100%}
        </style>
    </head>
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
        <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
            @if (Route::has('login'))
               <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('dash') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Home
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>
        <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
            <main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
                <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-es-lg rounded-ee-lg lg:rounded-ss-lg lg:rounded-ee-none">
                    <h1 class="mb-1 font-medium">The Every Service App.</h1>

                    <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Create an account to choose from our growing list of skilled services.  Available twenty four hours a day , seven days a week</p>
                    <ul class="flex flex-col mb-4 lg:mb-6">
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                View our services
                                <a
                                    href="{{ route('register') }}"
                                   class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
                                    <span>Create an account</span>

                                </a>
                            </span>
                        </li>
                        <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:start-[0.4rem] before:absolute">
                            <span class="relative py-1 bg-white dark:bg-[#161615]">
                                <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                    <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                                </span>
                            </span>
                            <span>
                                Your skills are valued here
                                <a href="{{ route('join-us') }}" target="_blank" class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
                                    <span>Join us</span>
                                </a>
                            </span>
                        </li>
                    </ul>
                    <ul class="flex gap-3 text-sm leading-normal">
                        <li>
                            <a href="{{ route('schedule-home') }}" target="_blank" class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
                                Book now
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="bg-[#000000] dark:bg-[#000000] relative lg:-ms-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg! aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                    {{-- scoreachore Logo --}}
                    <svg class="w-full text-[#000000] dark:text-[#000000 transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 512" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill="#000000" opacity="1.000000" stroke="none"
      d="
M2.000000,1.000000
	C146.615341,1.000000 291.230682,1.000000 435.923035,1.000000
	C435.923035,115.907829 435.923035,230.815735 435.923035,346.000000
	C291.643463,346.000000 147.286743,346.000000 2.464899,345.533020
	C1.999849,230.377365 1.999924,115.688683 2.000000,1.000000
M180.362762,199.768265
	C187.091568,199.848053 193.821182,199.997498 200.548096,199.917938
	C201.373001,199.908188 202.183426,198.672852 203.758057,198.147018
	C207.002106,198.620804 210.255951,199.525681 213.487564,199.452271
	C217.016006,199.372101 220.523849,198.386185 224.469467,198.444427
	C224.504410,198.928619 224.539368,199.412827 224.574326,199.897018
	C226.489716,199.105530 230.478226,202.080353 230.733276,197.119095
	C232.457672,198.008377 234.212173,199.697739 235.900681,199.634171
	C240.619492,199.456543 245.311005,198.553558 249.909637,198.810211
	C252.796631,199.158722 255.678635,199.593643 258.576080,199.760864
	C259.001556,199.785431 259.500397,198.538635 260.686951,197.932877
	C262.807251,197.903412 264.927521,197.873947 267.011841,198.524445
	C267.098236,198.947205 267.178894,199.738510 267.271881,199.739960
	C272.368835,199.819580 277.469330,199.919373 282.562134,199.768372
	C283.414795,199.743103 284.234344,198.601044 285.069214,197.975037
	C284.897980,197.660736 284.726776,197.346436 284.555542,197.032135
	C279.311493,197.032135 274.067413,197.032135 269.170654,196.192276
	C275.703125,196.192276 282.235626,196.192276 287.647156,196.192276
	C287.409302,188.113525 287.016418,181.026154 287.048767,173.940735
	C287.075958,167.988174 287.256744,162.106018 284.475616,156.720795
	C284.330170,132.159515 284.788177,107.575668 283.870880,83.043236
	C282.939453,58.132183 261.295258,36.549271 237.963989,34.278717
	C220.019852,32.532429 201.823074,33.376732 183.738266,33.092125
	C182.294846,33.069408 180.848587,33.226643 179.299820,33.305542
	C179.299820,41.701653 179.299820,49.771343 179.299820,57.915527
	C180.712692,57.915527 181.871582,57.915527 182.836807,58.745872
	C171.972885,60.563492 161.108948,62.381111 150.215027,64.203751
	C152.244034,71.306435 152.892960,71.561310 159.450165,70.501030
	C163.048035,69.919250 166.269623,71.125046 167.203064,75.182953
	C168.784348,82.057243 170.195953,88.971687 171.602890,95.884712
	C174.799896,111.593262 177.950699,127.311211 180.270370,143.304016
	C179.841095,144.447327 179.043686,145.588821 179.037979,146.734238
	C178.957031,163.007996 178.962845,179.282333 179.027618,195.556244
	C179.032150,196.694778 179.664993,197.830811 180.362762,199.768265
M179.899811,247.125351
	C182.989410,240.919998 183.625427,234.399689 179.038452,229.024719
	C174.416260,223.608551 167.637421,225.253250 161.315414,225.434082
	C161.315414,240.208359 161.315414,254.458008 161.315414,268.694550
	C163.508224,268.694550 165.425720,268.694550 167.809540,268.694550
	C167.809540,263.011658 167.809540,257.582306 167.809540,252.218201
	C175.055756,251.549377 175.078293,251.567047 175.088974,258.161346
	C175.094574,261.623993 175.089966,265.086609 175.089966,268.658264
	C177.579346,268.658264 179.618561,268.658264 183.013062,268.658264
	C181.797058,261.368591 180.666412,254.590698 179.899811,247.125351
M328.085754,267.144989
	C330.123718,267.917999 332.161682,268.690979 335.596710,269.993835
	C334.738678,262.310638 334.050110,256.461090 333.454926,250.602066
	C333.298279,249.060272 332.970337,247.307159 333.503052,245.960388
	C337.593079,235.619827 333.368927,226.500565 323.594086,225.300674
	C320.533417,224.924988 317.387726,225.242142 314.358154,225.242142
	C314.358154,240.161453 314.358154,254.523712 314.358154,268.773651
	C316.349609,268.773651 317.967468,268.773651 320.100220,268.773651
	C320.100220,263.042572 320.100220,257.482391 320.100220,251.956818
	C328.070465,251.706161 328.071014,251.706161 328.078369,259.221497
	C328.080627,261.551544 328.079132,263.881561 328.085754,267.144989
M153.367371,227.064178
	C149.462723,224.121216 145.149841,223.733887 140.915802,225.856583
	C136.386200,228.127472 134.660416,232.036606 134.905182,237.228912
	C135.241501,244.363312 134.816345,251.532059 135.089188,258.671875
	C135.177444,260.981354 135.979401,263.548187 137.251282,265.470306
	C140.157455,269.862305 144.696075,270.844727 149.552139,269.590393
	C153.909882,268.464813 157.777924,262.796692 157.853287,257.794586
	C157.955948,250.978470 158.298141,244.122604 157.700806,237.357681
	C157.405502,234.013321 155.236160,230.834427 153.367371,227.064178
M288.930573,230.659332
	C288.517303,240.461105 287.308716,250.315628 287.954315,260.047150
	C288.430176,267.220795 294.246979,270.690796 300.840271,269.893860
	C306.301819,269.233765 310.008972,264.154053 310.018494,257.284607
	C310.028595,249.979568 310.076813,242.673721 309.974396,235.370087
	C309.952301,233.795792 309.720093,232.024506 308.967163,230.693161
	C304.477814,222.754990 295.535187,222.454681 288.930573,230.659332
M277.978668,266.257965
	C278.112244,271.429871 281.621704,268.024994 283.725555,269.055206
	C283.725555,254.238525 283.725555,240.002335 283.725555,225.491531
	C281.761444,225.491531 280.050385,225.491531 277.831879,225.491531
	C277.831879,231.800491 277.831879,237.867874 277.831879,243.750549
	C274.554749,243.750549 271.793884,243.750549 268.808411,243.750549
	C268.808411,238.495911 269.002472,233.511261 268.666504,228.562592
	C268.586517,227.384659 266.498718,225.274246 265.748230,225.442154
	C264.359039,225.752930 262.284546,227.380875 262.227631,228.544891
	C261.894684,235.354599 262.063446,242.188873 262.063232,249.014847
	C262.063019,255.617233 262.063202,262.219604 262.063202,268.668488
	C264.624176,268.668488 266.546143,268.668488 268.823853,268.668488
	C268.823853,262.608826 268.823853,256.837128 268.823853,250.999054
	C272.044312,250.999054 274.884521,250.999054 277.978394,250.999054
	C277.978394,256.020081 277.978394,260.658966 277.978668,266.257965
M228.987930,251.364594
	C227.617523,243.781754 226.398224,236.165527 224.737015,228.646942
	C224.438904,227.297714 222.481644,225.719910 221.006607,225.334854
	C216.116821,224.058365 215.317398,226.996918 214.624344,231.243042
	C212.582565,243.752121 209.887985,256.154633 207.407578,268.809692
	C209.862213,268.809692 211.655289,268.809692 213.644333,268.809692
	C214.292480,266.106293 214.916931,263.501740 215.535767,260.920563
	C217.348282,260.920563 218.845551,260.886780 220.340607,260.930206
	C221.788315,260.972260 223.233734,261.093689 224.605209,261.175751
	C225.697495,269.228943 225.697495,269.228943 232.390747,268.480438
	C231.265015,263.028656 230.150299,257.630188 228.987930,251.364594
M98.342636,259.279785
	C95.722443,263.888031 91.905579,264.913910 89.706444,261.133911
	C87.663055,257.621643 85.299248,257.924988 82.304352,258.537872
	C83.014702,265.193420 86.069885,268.912354 91.484840,269.883850
	C96.177864,270.725830 101.242790,268.232819 103.493195,263.973206
	C106.277878,258.702271 105.584724,254.043320 101.074234,249.674942
	C97.516396,246.229187 93.325729,243.335785 90.286308,239.506363
	C89.096703,238.007568 90.281654,234.624084 90.385132,232.098969
	C92.761055,232.371872 96.676109,231.901535 97.232254,233.053207
	C99.106575,236.934662 101.826897,235.950836 104.687965,235.800278
	C104.502541,229.747818 100.924553,225.775543 94.869217,224.710999
	C89.968132,223.849380 84.738525,227.102295 82.987381,232.101746
	C81.023491,237.708572 82.709251,241.710754 87.956779,246.801636
	C91.748093,250.479767 97.634476,252.347610 98.342636,259.279785
M199.945633,247.315475
	C200.083878,240.559296 194.284576,246.041168 192.132416,243.098114
	C192.132416,239.871689 192.132416,236.127274 192.132416,231.955002
	C196.062714,231.955002 199.817825,231.955002 203.697601,231.955002
	C203.697601,229.623779 203.697601,227.723282 203.697601,225.223206
	C198.165756,225.223206 192.874832,225.087189 187.604553,225.356079
	C186.718018,225.401291 185.202728,227.188095 185.190735,228.184814
	C185.029037,241.626602 185.082275,255.070984 185.082275,268.704224
	C191.586105,268.704224 197.649139,268.704224 203.632355,268.704224
	C203.632355,266.527100 203.632355,264.624420 203.632355,262.154236
	C199.599350,262.154236 195.876144,262.154236 192.209259,262.154236
	C192.209259,257.986969 192.209259,254.401489 192.209259,251.990250
	C195.233414,250.506058 197.588150,249.350403 199.945633,247.315475
M350.205872,244.026825
	C348.442413,244.026825 346.678986,244.026825 345.033447,244.026825
	C345.033447,239.667404 345.033447,235.934113 345.033447,231.830444
	C349.151947,231.830444 352.922028,231.830444 358.513031,231.830444
	C356.613678,228.883026 355.602295,225.632095 354.217957,225.464691
	C349.017700,224.835739 343.695801,225.212631 338.251923,225.212631
	C338.251923,240.079834 338.251923,254.318741 338.251923,268.709106
	C344.556610,268.709106 350.629028,268.709106 356.615601,268.709106
	C357.860016,263.759155 356.407532,261.463074 351.239471,262.155029
	C349.171021,262.432007 347.034515,262.200623 344.974945,262.200623
	C344.974945,258.037140 344.974945,254.462112 344.974945,250.576981
	C346.777527,250.576981 348.305176,250.796570 349.729004,250.506409
	C350.836456,250.280716 352.726746,249.339020 352.683960,248.855896
	C352.538727,247.215164 351.690155,245.636673 350.205872,244.026825
M109.018227,232.818100
	C109.043312,242.696365 108.598122,252.607651 109.288635,262.439178
	C109.642578,267.478485 117.143120,271.000702 122.653976,269.841125
	C127.427872,268.836578 131.069870,263.642273 130.556473,258.362610
	C127.819954,258.061768 125.325966,257.443207 123.808777,261.160950
	C123.325233,262.345856 120.081085,263.196564 118.382660,262.843018
	C117.019279,262.559204 115.175652,260.265747 115.109444,258.793732
	C114.773407,251.322708 114.745949,243.819382 115.092773,236.349762
	C115.173637,234.608215 116.816406,232.039062 118.318375,231.518753
	C119.797256,231.006439 122.081062,232.462830 123.881744,233.326355
	C126.014053,234.348892 128.007309,235.661423 130.774506,237.260727
	C130.736115,230.082306 128.016815,226.343933 123.118523,225.046509
	C116.942581,223.410629 112.566154,225.585358 109.018227,232.818100
M236.318039,232.422684
	C236.212540,240.553757 236.063400,248.684555 236.014435,256.815979
	C235.970184,264.166016 239.627838,269.183502 245.411438,269.895996
	C252.314850,270.746399 256.747437,267.193817 258.627075,259.107178
	C255.987152,258.003845 253.760498,256.989868 251.673172,260.539459
	C250.839340,261.957428 248.015228,263.198456 246.407867,262.891724
	C244.764313,262.578064 242.351120,260.333588 242.266068,258.822235
	C241.837387,251.204880 241.798508,243.535309 242.254562,235.921890
	C242.355667,234.233963 244.761322,232.193954 246.587662,231.295639
	C247.577713,230.808640 250.494278,231.996185 250.969315,233.103165
	C252.760025,237.276108 255.777802,235.874008 258.749115,235.698975
	C256.999756,228.341049 254.185501,225.377563 248.408142,224.624588
	C243.495850,223.984375 239.718170,226.318863 236.318039,232.422684
M349.160675,282.049927
	C349.417694,289.578339 349.674713,297.106750 349.931702,304.635193
	C350.516571,304.722656 351.101440,304.810150 351.686310,304.897614
	C352.097229,303.459869 352.823334,302.030670 352.862671,300.582825
	C353.007263,295.259430 352.608246,289.899689 353.112335,284.620361
	C353.270538,282.963379 355.400482,280.561310 357.025116,280.176300
	C360.194794,279.425201 360.004486,282.304108 360.005341,284.481903
	C360.007477,290.142120 359.939606,295.803802 360.063599,301.461304
	C360.087769,302.565247 360.851746,303.652954 361.274506,304.748169
	C361.805206,304.642334 362.335907,304.536499 362.866608,304.430695
	C362.866608,296.566132 363.000336,288.696808 362.722443,280.842072
	C362.680725,279.663239 360.754395,277.621552 359.628052,277.570770
	C354.629395,277.345306 349.600983,277.629639 344.591156,277.883392
	C342.879852,277.970093 341.191315,278.506592 339.057404,278.922302
	C339.057404,286.118500 338.992889,293.924866 339.132111,301.727600
	C339.151337,302.805664 340.178864,303.865723 340.739594,304.934113
	C341.173035,304.802979 341.606476,304.671844 342.039917,304.540710
	C342.039917,298.265320 341.954987,291.988373 342.068390,285.714996
	C342.150421,281.177734 345.002441,279.383026 349.160675,282.049927
M375.683624,305.014191
	C378.979218,305.185486 382.199463,304.957062 383.225433,301.090210
	C383.545563,299.883636 382.820587,298.399841 382.574066,297.042938
	C381.758240,297.912689 381.043823,298.918854 380.101807,299.618774
	C378.824677,300.567749 377.278900,302.031921 376.024506,301.874146
	C374.896759,301.732330 373.478302,299.831635 373.137756,298.469360
	C372.645996,296.502197 373.011993,294.320618 373.011993,291.744080
	C376.968109,291.744080 380.355255,291.744080 383.868500,291.744080
	C383.868500,288.430725 384.106262,285.589691 383.812744,282.804657
	C383.373260,278.634003 380.602600,276.777161 376.609039,277.085175
	C372.900604,277.371216 369.877960,278.685883 369.963898,283.308014
	C370.059692,288.458282 370.040863,293.612518 369.965271,298.763458
	C369.914520,302.224304 371.378845,304.358459 375.683624,305.014191
M215.516922,297.011719
	C214.957352,297.639496 214.032547,298.199677 213.901703,298.906799
	C213.348892,301.894165 211.273972,302.885315 208.937363,301.922302
	C207.613281,301.376526 206.596420,299.276184 206.133194,297.675720
	C205.658478,296.035553 206.027985,294.151031 206.027985,291.927765
	C209.815384,291.927765 213.220810,291.927765 216.946701,291.927765
	C216.946701,288.692444 217.113022,285.892975 216.907822,283.120972
	C216.598175,278.938263 213.878769,276.687134 209.515381,277.081268
	C205.756546,277.420837 202.893127,278.865204 203.015808,283.454163
	C203.153290,288.596710 202.966187,293.747406 203.070862,298.891510
	C203.164902,303.512604 206.280807,305.648651 211.694336,305.001648
	C215.598129,304.535095 217.203003,301.802979 215.516922,297.011719
M75.111397,302.715942
	C75.893333,303.347137 76.675262,303.978363 77.457207,304.609558
	C77.920799,303.644897 78.764015,302.688690 78.785645,301.714233
	C78.914749,295.897858 78.549973,290.050385 79.060570,284.276093
	C79.196930,282.733978 81.815598,281.411316 83.294647,279.987915
	C84.201439,281.418671 85.805748,282.809448 85.890427,284.287323
	C86.203743,289.756012 85.927063,295.255890 86.077164,300.738434
	C86.115234,302.128998 86.911926,303.498779 87.360039,304.878143
	C87.924103,304.758331 88.488167,304.638519 89.052231,304.518707
	C89.052231,297.262695 89.114693,290.005920 89.029854,282.750916
	C88.975044,278.064301 85.418007,275.919128 80.926735,277.574188
	C79.183273,278.216675 77.309456,278.505432 75.192909,279.030243
	C75.250221,278.742096 75.129967,279.066742 75.129204,279.391663
	C75.111588,286.873352 75.106979,294.355042 75.111397,302.715942
M274.024719,285.753754
	C274.020660,303.106323 274.020660,303.106323 277.001160,304.717224
	C277.001160,296.642334 277.263763,288.864899 276.884064,281.118988
	C276.709106,277.549957 272.674500,276.244629 268.730499,277.673096
	C267.008636,278.296783 265.092926,278.385101 263.043610,278.756744
	C263.043610,286.061188 262.967773,293.548950 263.121216,301.032013
	C263.145691,302.224915 264.199524,303.396667 264.777496,304.578217
	C265.410706,303.292969 266.534790,302.028809 266.591034,300.718750
	C266.819458,295.400787 266.351501,290.026825 266.950409,284.765717
	C267.147766,283.032196 269.790314,281.577057 271.314789,279.994629
	C272.218079,281.604645 273.121368,283.214691 274.024719,285.753754
M166.846558,280.702728
	C166.626984,287.258484 165.855728,293.858521 166.377228,300.354797
	C166.739105,304.862549 170.926361,305.415710 174.851639,304.994812
	C178.586594,304.594238 180.296585,302.682037 180.074677,298.747772
	C179.822968,294.285187 179.958267,289.796509 180.036240,285.321075
	C180.092194,282.109924 180.271011,279.088440 176.302185,277.716400
	C172.625732,276.445435 169.593323,276.812897 166.846558,280.702728
M66.879013,289.671387
	C66.243172,287.136322 65.211197,284.624268 65.062447,282.060944
	C64.827286,278.008667 62.868839,277.350281 59.305271,278.368408
	C57.430397,286.981323 55.550442,295.617615 53.670486,304.253876
	C54.306084,304.480560 54.941685,304.707214 55.577282,304.933899
	C56.599796,302.693115 57.622311,300.452332 58.493542,298.543091
	C65.224701,294.976532 65.677223,301.848114 68.361366,305.062164
	C68.844742,304.782196 69.328110,304.502228 69.811485,304.222290
	C68.857849,299.655090 67.904213,295.087891 66.879013,289.671387
M252.826813,298.262329
	C253.839157,300.460297 254.851501,302.658264 255.863846,304.856232
	C256.295441,304.768616 256.726990,304.681000 257.158569,304.593384
	C257.321167,303.623779 257.793213,302.585999 257.597046,301.695374
	C256.120605,294.991730 254.427841,288.335358 252.982346,281.625519
	C252.284210,278.384827 250.731735,277.112030 247.270981,278.415344
	C245.409470,286.975586 243.523300,295.649200 241.637131,304.322845
	C242.269455,304.553741 242.901764,304.784668 243.534088,305.015564
	C244.559265,302.757477 245.584442,300.499390 246.694122,298.055176
	C248.369476,298.055176 250.188187,298.055176 252.826813,298.262329
M156.041626,278.853210
	C156.041626,282.277588 156.041626,285.701996 156.041626,289.120728
	C153.035309,289.120728 150.751862,289.120728 147.984680,289.120728
	C147.984680,285.337921 147.984680,281.762299 147.984680,278.186676
	C147.591263,278.016418 147.197845,277.846191 146.804428,277.675934
	C146.218445,278.456024 145.239563,279.174988 145.107285,280.025635
	C143.788467,288.507172 145.101074,302.925720 147.835312,304.747772
	C147.835312,300.335480 147.835312,296.321625 147.835312,292.274170
	C150.886154,292.274170 153.287766,292.274170 156.285568,292.274170
	C156.285568,296.516418 156.285568,300.522614 156.285568,304.528778
	C157.967407,304.091064 158.913437,303.312134 158.925537,302.518951
	C159.039734,295.034790 159.057159,287.546783 158.890030,280.064636
	C158.874847,279.385406 157.378006,278.739258 156.041626,278.853210
M127.936562,291.483337
	C127.937225,289.151611 127.954643,286.819733 127.933731,284.488190
	C127.913704,282.255402 127.748924,280.089935 131.019379,279.948395
	C134.094879,279.815308 135.178879,281.113342 135.108337,284.089752
	C135.083618,285.132690 136.021149,286.198425 136.519287,287.253754
	C136.957260,287.086823 137.395218,286.919922 137.833176,286.752991
	C137.898026,285.957062 137.936295,285.157959 138.032089,284.365753
	C138.584015,279.801636 136.176926,277.586700 131.987183,277.052948
	C127.511040,276.482788 124.870613,278.537170 124.564056,283.400299
	C124.230209,288.696167 124.222366,294.057892 124.654846,299.343231
	C125.038078,304.026886 128.653976,306.076447 133.618164,304.965759
	C138.100632,303.962891 138.688324,300.944244 137.227249,295.574310
	C136.087143,297.640686 135.748581,298.857422 134.953888,299.553040
	C133.767136,300.591858 132.270294,301.860535 130.883881,301.886566
	C129.921860,301.904602 128.346207,300.128906 128.070572,298.920624
	C127.601006,296.862183 127.938286,294.619690 127.936562,291.483337
M95.079094,288.268372
	C94.331467,293.044769 96.062721,296.306274 100.751091,297.209747
	C100.976654,300.019592 101.162277,302.331940 101.347900,304.644257
	C102.015724,304.673126 102.683540,304.701996 103.351364,304.730835
	C103.674004,302.227875 103.996643,299.724915 104.322632,297.217316
	C109.062424,294.878113 111.152817,288.004333 109.345284,279.983398
	C109.142395,279.083099 107.787216,278.442474 106.046280,276.828339
	C106.046280,282.280640 105.961098,286.247864 106.075806,290.209290
	C106.154129,292.914276 105.145226,294.113708 102.333153,294.163940
	C99.310883,294.217926 98.696587,292.622894 98.747261,290.104248
	C98.810669,286.952759 98.938103,283.779602 98.630035,280.656067
	C98.523888,279.579742 97.193817,278.624176 96.422844,277.613434
	C95.974861,277.891541 95.526886,278.169647 95.078903,278.447723
	C95.078903,281.414368 95.078903,284.380981 95.079094,288.268372
M283.050751,284.541138
	C283.726562,288.263367 281.021301,293.086517 285.405518,295.497223
	C288.360474,297.121948 289.374969,298.778748 289.038055,301.880371
	C288.938202,302.799438 289.579315,303.798981 289.880890,304.761627
	C291.275909,303.790558 291.942688,302.803192 291.905609,301.842957
	C291.799438,299.092072 291.798615,296.721527 295.218933,295.758972
	C296.065399,295.520721 296.881531,293.724976 296.990448,292.576752
	C297.379639,288.473877 297.607635,284.338928 297.535950,280.222412
	C297.520691,279.345856 295.988037,278.495697 295.154449,277.633392
	C294.063782,282.056335 293.990234,285.690796 294.087616,289.320618
	C294.162292,292.102814 293.893311,294.272186 290.221130,294.152283
	C286.888123,294.043457 286.019470,292.186096 286.043213,289.324249
	C286.074402,285.562714 286.050903,281.800751 286.050903,278.038971
	C285.378784,277.939545 284.706665,277.840118 284.034546,277.740692
	C283.706635,279.693329 283.378754,281.645935 283.050751,284.541138
M320.026184,295.704681
	C319.351105,298.052216 321.617004,302.178802 316.181213,301.911743
	C316.181213,294.846313 316.181213,287.937012 316.181213,281.578339
	C318.443542,280.759979 320.280060,280.095642 322.116547,279.431305
	C321.969574,279.043945 321.822571,278.656616 321.675568,278.269257
	C318.604462,278.269257 315.533325,278.269257 312.163208,278.269257
	C312.163208,285.383789 312.026825,292.193207 312.262146,298.989746
	C312.318726,300.623871 313.192993,302.895172 314.436127,303.655365
	C316.013184,304.619812 319.133270,305.266571 320.177063,304.383209
	C321.763519,303.040588 322.435211,300.322388 322.870300,298.067780
	C323.030762,297.236298 321.419220,296.062866 320.026184,295.704681
M195.303452,277.097107
	C192.673157,277.685059 190.042877,278.273010 187.165756,278.916138
	C187.165756,286.008209 187.106873,293.480621 187.229736,300.950073
	C187.248001,302.060699 188.122330,303.157288 188.600616,304.260376
	C189.075745,304.111420 189.550873,303.962463 190.026001,303.813507
	C190.026001,298.195526 189.975418,292.576813 190.061417,286.960144
	C190.083023,285.549530 190.185974,283.918060 190.898544,282.800720
	C191.656311,281.612518 193.182480,280.914368 194.373108,280.002228
	C194.932144,281.085754 195.481110,282.174591 196.053223,283.251190
	C196.560928,284.206512 197.094345,285.148163 197.616409,286.095825
	C199.064270,282.499573 200.096085,279.221985 195.303452,277.097107
M328.081604,282.706146
	C328.081451,288.510956 327.961945,294.319885 328.161621,300.117798
	C328.214264,301.645905 329.253143,303.140045 329.839142,304.649750
	C330.524780,303.228485 331.752350,301.825989 331.802246,300.382751
	C332.019897,294.087921 332.000793,287.777924 331.802124,281.481812
	C331.764435,280.287231 330.522461,279.130676 329.836151,277.956573
	C329.251495,279.225189 328.666809,280.493774 328.081604,282.706146
M225.080231,289.414520
	C225.324677,290.294464 225.529373,291.924500 225.819611,291.939850
	C229.198166,292.118835 232.589645,292.054382 235.977692,292.054382
	C236.025131,291.531372 236.072571,291.008362 236.120010,290.485321
	C233.159225,288.024994 229.335327,289.753906 225.080231,289.414520
z"/>
                            <path fill="#C2C2C2" opacity="1.000000" stroke="none"
                                  d="
M1.500000,1.000000
	C1.999924,115.688683 1.999849,230.377365 1.999889,345.533020
	C1.666673,344.500000 1.042637,343.000183 1.041697,341.499969
	C0.994236,265.833344 1.000000,190.166687 1.000000,114.500038
	C1.000000,76.666695 1.000000,38.833347 1.500000,1.000000
z"/>
                            <path fill="#FAFAFA" opacity="1.000000" stroke="none"
                                  d="
M224.040680,197.795074
	C220.523849,198.386185 217.016006,199.372101 213.487564,199.452271
	C210.255951,199.525681 207.002106,198.620804 203.415207,197.759171
	C202.697449,196.912918 202.322556,196.454498 201.995941,195.600418
	C202.891464,189.540390 202.891464,189.540390 213.596680,189.704285
	C211.513458,182.145859 209.425568,174.570496 207.310028,166.894852
	C198.466843,172.929581 194.644745,173.438324 189.579239,168.815552
	C185.335693,164.942917 183.910721,159.758987 183.903870,153.738235
	C182.962051,149.905533 182.041168,146.465439 181.120270,143.025330
	C177.950699,127.311211 174.799896,111.593262 171.602890,95.884712
	C170.195953,88.971687 168.784348,82.057243 167.203064,75.182953
	C166.269623,71.125046 163.048035,69.919250 159.450165,70.501030
	C152.892960,71.561310 152.244034,71.306435 150.215027,64.203751
	C161.108948,62.381111 171.972885,60.563492 182.883545,58.359276
	C182.930283,57.972679 182.952606,58.087772 183.334274,58.137573
	C187.311157,61.018940 186.686615,63.895363 181.787415,65.994812
	C181.025696,66.134003 180.494751,66.285172 179.535843,66.556931
	C176.770325,68.461914 172.757385,70.004814 172.457840,72.082962
	C171.902100,75.938553 173.175858,80.215004 174.411346,84.085236
	C174.835999,85.415504 177.420532,86.056267 179.011246,86.992081
	C179.004135,86.972130 178.961533,86.979012 179.016449,87.262428
	C179.388824,87.709595 179.706284,87.873344 180.025177,88.007339
	C180.026627,87.977585 179.968109,87.966423 180.000671,88.315369
	C180.363266,88.956207 180.693268,89.248116 180.977173,89.568665
	C180.931046,89.597305 180.924637,89.705704 180.869766,90.112122
	C182.549957,92.155266 184.386215,93.699234 185.993744,95.452858
	C187.883255,97.514084 189.495850,99.828011 191.369293,101.905403
	C194.384018,105.248337 196.198639,104.996544 198.141907,101.055359
	C199.665253,97.965836 201.435928,94.947433 202.522491,91.705002
	C204.264481,86.506729 207.562698,84.405312 212.953781,84.897583
	C214.147278,85.006554 216.320282,84.154831 216.514191,83.368607
	C216.893341,81.831146 216.816223,79.381393 215.839172,78.442909
	C210.662842,73.471054 209.307755,67.199623 208.946503,60.521641
	C206.560577,59.757996 204.193253,59.180401 202.000732,58.208447
	C201.143723,57.828529 200.468155,56.629002 200.164047,55.660240
	C200.071884,55.366619 201.427643,54.394138 202.252045,54.090107
	C203.468430,53.641533 204.994553,52.970306 206.053024,53.344238
	C210.130035,54.784573 212.178070,52.249882 214.877655,49.953201
	C222.489197,43.477642 232.308411,46.726784 235.012604,56.348003
	C237.248672,64.303642 235.357483,71.237915 230.045547,77.517372
	C228.411636,79.448891 227.568832,82.049637 226.694916,83.713493
	C232.252945,85.315224 237.389603,85.758324 241.348663,88.150406
	C249.824799,93.271744 253.980942,102.234985 258.506683,110.634987
	C259.002380,111.555061 258.240753,113.476143 257.565765,114.646614
	C254.832092,119.387085 251.904266,124.015602 248.945435,128.853271
	C260.768738,129.832581 267.574036,134.322342 271.149353,143.836365
	C273.071716,148.951828 275.378052,153.417633 281.122467,155.399933
	C282.013153,156.096786 282.808441,156.520096 283.603760,156.943390
	C287.256744,162.106018 287.075958,167.988174 287.048767,173.940735
	C287.016418,181.026154 287.409302,188.113525 287.647156,196.192276
	C282.235626,196.192276 275.703125,196.192276 268.721985,196.525070
	C267.864807,197.186752 267.456329,197.515625 267.047821,197.844482
	C264.927521,197.873947 262.807251,197.903412 260.239868,197.611542
	C258.929962,196.874130 258.067139,196.458038 257.164673,195.636749
	C255.122620,191.174072 255.802017,187.770935 259.086182,184.524109
	C260.486206,183.139954 261.719818,180.899384 261.802582,178.994736
	C262.098206,172.188080 261.389618,165.314148 262.017334,158.554489
	C262.390656,154.534561 264.553619,150.680832 266.433197,145.244949
	C264.802429,138.813248 258.653259,135.458817 250.825012,134.102631
	C244.359909,132.982605 238.673340,137.483276 238.835663,144.073318
	C239.055771,153.009232 239.536560,161.940704 240.031113,170.867126
	C240.349487,176.613556 240.893356,182.347488 241.334808,188.069473
	C249.476761,188.498505 250.074814,189.136078 249.890442,197.339325
	C249.827072,197.546204 250.013290,197.936859 250.013290,197.936859
	C245.311005,198.553558 240.619492,199.456543 235.900681,199.634171
	C234.212173,199.697739 232.457672,198.008377 230.454224,196.813782
	C230.175186,196.508484 230.035385,196.080750 230.064713,195.641434
	C229.427567,191.182083 228.861267,187.142334 228.074539,183.145966
	C226.238815,173.821045 224.297104,164.516983 222.189987,154.182571
	C221.511551,155.621796 221.025146,156.152359 221.071426,156.631409
	C221.668869,162.815033 222.260803,169.001312 223.017853,175.166809
	C223.873016,182.131226 224.893799,189.075302 225.577881,196.071381
	C224.889038,196.674713 224.464859,197.234894 224.040680,197.795074
M181.792587,118.835945
	C184.079132,130.628815 186.236908,142.449020 188.732193,154.197571
	C189.462509,157.636108 190.572891,161.309601 192.629776,164.027176
	C193.783234,165.551117 198.105789,166.590591 199.461243,165.644073
	C202.180023,163.745529 205.536194,160.397095 205.642044,157.536591
	C206.055542,146.361603 205.275040,135.144165 204.998947,123.941010
	C204.903351,120.061729 204.983734,116.178116 204.983734,111.577202
	C203.420929,113.035339 202.525497,113.967628 201.532639,114.780983
	C196.267838,119.093887 194.641510,118.992561 189.840668,114.303902
	C187.609390,112.124733 185.278519,110.047508 183.070908,107.224525
	C181.487854,105.093941 179.904800,102.963356 178.321762,100.832764
	C177.983337,100.951881 177.644913,101.070992 177.306488,101.190102
	C178.783356,106.786583 180.260223,112.383057 181.792587,118.835945
M234.665710,116.799660
	C235.088242,119.221024 235.341568,121.691414 236.021576,124.038177
	C236.272507,124.904152 237.528580,126.043312 238.326584,126.043579
	C239.326233,126.043922 240.807434,125.239868 241.242752,124.365707
	C243.120361,120.595268 244.797302,116.712563 246.297958,112.775673
	C246.661942,111.820831 246.505127,110.077202 245.855927,109.426765
	C242.746658,106.311668 239.385956,103.447525 235.590637,100.021194
	C235.178635,105.360138 234.768799,110.670967 234.665710,116.799660
z"/>
                            <path fill="#E4E4E4" opacity="1.000000" stroke="none"
                                  d="
M284.039673,156.832092
	C282.808441,156.520096 282.013153,156.096786 281.156830,154.924072
	C281.072113,132.702682 280.900482,111.229607 281.060516,89.758995
	C281.281189,60.149567 257.163879,36.469002 228.181961,36.877037
	C214.368958,37.071514 200.550903,36.900375 186.735184,36.921883
	C185.478912,36.923840 184.222931,37.123753 182.952606,37.232964
	C182.952606,44.451347 182.952606,51.269558 182.952606,58.087772
	C182.952606,58.087772 182.930283,57.972679 182.980377,57.944103
	C181.871582,57.915527 180.712692,57.915527 179.299820,57.915527
	C179.299820,49.771343 179.299820,41.701653 179.299820,33.305542
	C180.848587,33.226643 182.294846,33.069408 183.738266,33.092125
	C201.823074,33.376732 220.019852,32.532429 237.963989,34.278717
	C261.295258,36.549271 282.939453,58.132183 283.870880,83.043236
	C284.788177,107.575668 284.330170,132.159515 284.039673,156.832092
z"/>
                            <path fill="#F1F1F1" opacity="1.000000" stroke="none"
                                  d="
M179.717789,247.469086
	C180.666412,254.590698 181.797058,261.368591 183.013062,268.658264
	C179.618561,268.658264 177.579346,268.658264 175.089966,268.658264
	C175.089966,265.086609 175.094574,261.623993 175.088974,258.161346
	C175.078293,251.567047 175.055756,251.549377 167.809540,252.218201
	C167.809540,257.582306 167.809540,263.011658 167.809540,268.694550
	C165.425720,268.694550 163.508224,268.694550 161.315414,268.694550
	C161.315414,254.458008 161.315414,240.208359 161.315414,225.434082
	C167.637421,225.253250 174.416260,223.608551 179.038452,229.024719
	C183.625427,234.399689 182.989410,240.919998 179.717789,247.469086
M167.811661,233.769089
	C167.811661,237.398438 167.811661,241.027786 167.811661,246.049911
	C170.686600,244.750519 174.168777,244.157227 174.465683,242.843842
	C175.139816,239.861847 174.615616,236.415741 173.720306,233.414307
	C173.508759,232.705124 169.907211,233.007126 167.811661,233.769089
z"/>
                            <path fill="#F5F5F5" opacity="1.000000" stroke="none"
                                  d="
M328.082550,266.678284
	C328.079132,263.881561 328.080627,261.551544 328.078369,259.221497
	C328.071014,251.706161 328.070465,251.706161 320.100220,251.956818
	C320.100220,257.482391 320.100220,263.042572 320.100220,268.773651
	C317.967468,268.773651 316.349609,268.773651 314.358154,268.773651
	C314.358154,254.523712 314.358154,240.161453 314.358154,225.242142
	C317.387726,225.242142 320.533417,224.924988 323.594086,225.300674
	C333.368927,226.500565 337.593079,235.619827 333.503052,245.960388
	C332.970337,247.307159 333.298279,249.060272 333.454926,250.602066
	C334.050110,256.461090 334.738678,262.310638 335.596710,269.993835
	C332.161682,268.690979 330.123718,267.917999 328.082550,266.678284
M323.232025,231.951584
	C321.224365,231.735962 319.761871,231.881790 319.959320,234.654266
	C320.202545,238.069412 320.017395,241.515076 320.017395,244.947540
	C320.462036,245.357132 320.906647,245.766724 321.351288,246.176300
	C323.580963,244.638687 327.339661,243.392105 327.700104,241.498657
	C328.318756,238.248642 330.212006,233.209152 323.232025,231.951584
z"/>
                            <path fill="#F4F4F4" opacity="1.000000" stroke="none"
                                  d="
M153.641052,227.322418
	C155.236160,230.834427 157.405502,234.013321 157.700806,237.357681
	C158.298141,244.122604 157.955948,250.978470 157.853287,257.794586
	C157.777924,262.796692 153.909882,268.464813 149.552139,269.590393
	C144.696075,270.844727 140.157455,269.862305 137.251282,265.470306
	C135.979401,263.548187 135.177444,260.981354 135.089188,258.671875
	C134.816345,251.532059 135.241501,244.363312 134.905182,237.228912
	C134.660416,232.036606 136.386200,228.127472 140.915802,225.856583
	C145.149841,223.733887 149.462723,224.121216 153.641052,227.322418
M144.735214,263.103180
	C149.527313,263.698029 151.289246,261.456573 151.136871,256.799042
	C150.930908,250.504028 150.997177,244.195572 151.116791,237.896118
	C151.188690,234.109558 150.114655,231.045258 145.906708,231.109039
	C141.909332,231.169632 141.074722,234.505722 141.027313,237.809555
	C140.934494,244.275803 140.779358,250.756393 141.132050,257.204681
	C141.240311,259.183868 142.918320,261.077179 144.735214,263.103180
z"/>
                            <path fill="#F4F4F4" opacity="1.000000" stroke="none"
                                  d="
M289.035034,230.284714
	C295.535187,222.454681 304.477814,222.754990 308.967163,230.693161
	C309.720093,232.024506 309.952301,233.795792 309.974396,235.370087
	C310.076813,242.673721 310.028595,249.979568 310.018494,257.284607
	C310.008972,264.154053 306.301819,269.233765 300.840271,269.893860
	C294.246979,270.690796 288.430176,267.220795 287.954315,260.047150
	C287.308716,250.315628 288.517303,240.461105 289.035034,230.284714
M303.802002,259.791412
	C303.868958,252.166000 303.924469,244.540451 304.007904,236.915222
	C304.046692,233.371490 302.164795,230.693436 298.874847,231.283905
	C296.964813,231.626709 294.329620,234.725174 294.163422,236.758743
	C293.584290,243.845184 293.739624,251.017776 294.086578,258.134644
	C294.168793,259.821136 295.748199,262.251251 297.240082,262.855927
	C299.337006,263.705750 302.317200,263.930481 303.802002,259.791412
z"/>
                            <path fill="#F2F2F2" opacity="1.000000" stroke="none"
                                  d="
M277.978516,265.777893
	C277.978394,260.658966 277.978394,256.020081 277.978394,250.999054
	C274.884521,250.999054 272.044312,250.999054 268.823853,250.999054
	C268.823853,256.837128 268.823853,262.608826 268.823853,268.668488
	C266.546143,268.668488 264.624176,268.668488 262.063202,268.668488
	C262.063202,262.219604 262.063019,255.617233 262.063232,249.014847
	C262.063446,242.188873 261.894684,235.354599 262.227631,228.544891
	C262.284546,227.380875 264.359039,225.752930 265.748230,225.442154
	C266.498718,225.274246 268.586517,227.384659 268.666504,228.562592
	C269.002472,233.511261 268.808411,238.495911 268.808411,243.750549
	C271.793884,243.750549 274.554749,243.750549 277.831879,243.750549
	C277.831879,237.867874 277.831879,231.800491 277.831879,225.491531
	C280.050385,225.491531 281.761444,225.491531 283.725555,225.491531
	C283.725555,240.002335 283.725555,254.238525 283.725555,269.055206
	C281.621704,268.024994 278.112244,271.429871 277.978516,265.777893
z"/>
                            <path fill="#F4F4F4" opacity="1.000000" stroke="none"
                                  d="
M229.011749,251.798157
	C230.150299,257.630188 231.265015,263.028656 232.390747,268.480438
	C225.697495,269.228943 225.697495,269.228943 224.605209,261.175751
	C223.233734,261.093689 221.788315,260.972260 220.340607,260.930206
	C218.845551,260.886780 217.348282,260.920563 215.535767,260.920563
	C214.916931,263.501740 214.292480,266.106293 213.644333,268.809692
	C211.655289,268.809692 209.862213,268.809692 207.407578,268.809692
	C209.887985,256.154633 212.582565,243.752121 214.624344,231.243042
	C215.317398,226.996918 216.116821,224.058365 221.006607,225.334854
	C222.481644,225.719910 224.438904,227.297714 224.737015,228.646942
	C226.398224,236.165527 227.617523,243.781754 229.011749,251.798157
M217.034668,253.533783
	C219.008514,253.678299 220.982376,253.822830 223.306580,253.992996
	C222.155548,248.859222 221.183594,244.524139 220.211639,240.189072
	C219.919571,240.237610 219.627518,240.286148 219.335449,240.334702
	C218.552094,244.439087 217.768723,248.543472 217.034668,253.533783
z"/>
                            <path fill="#F2F2F2" opacity="1.000000" stroke="none"
                                  d="
M98.531555,258.902100
	C97.634476,252.347610 91.748093,250.479767 87.956779,246.801636
	C82.709251,241.710754 81.023491,237.708572 82.987381,232.101746
	C84.738525,227.102295 89.968132,223.849380 94.869217,224.710999
	C100.924553,225.775543 104.502541,229.747818 104.687965,235.800278
	C101.826897,235.950836 99.106575,236.934662 97.232254,233.053207
	C96.676109,231.901535 92.761055,232.371872 90.385132,232.098969
	C90.281654,234.624084 89.096703,238.007568 90.286308,239.506363
	C93.325729,243.335785 97.516396,246.229187 101.074234,249.674942
	C105.584724,254.043320 106.277878,258.702271 103.493195,263.973206
	C101.242790,268.232819 96.177864,270.725830 91.484840,269.883850
	C86.069885,268.912354 83.014702,265.193420 82.304352,258.537872
	C85.299248,257.924988 87.663055,257.621643 89.706444,261.133911
	C91.905579,264.913910 95.722443,263.888031 98.531555,258.902100
z"/>
                            <path fill="#F0F0F0" opacity="1.000000" stroke="none"
                                  d="
M199.944275,247.755112
	C197.588150,249.350403 195.233414,250.506058 192.209259,251.990250
	C192.209259,254.401489 192.209259,257.986969 192.209259,262.154236
	C195.876144,262.154236 199.599350,262.154236 203.632355,262.154236
	C203.632355,264.624420 203.632355,266.527100 203.632355,268.704224
	C197.649139,268.704224 191.586105,268.704224 185.082275,268.704224
	C185.082275,255.070984 185.029037,241.626602 185.190735,228.184814
	C185.202728,227.188095 186.718018,225.401291 187.604553,225.356079
	C192.874832,225.087189 198.165756,225.223206 203.697601,225.223206
	C203.697601,227.723282 203.697601,229.623779 203.697601,231.955002
	C199.817825,231.955002 196.062714,231.955002 192.132416,231.955002
	C192.132416,236.127274 192.132416,239.871689 192.132416,243.098114
	C194.284576,246.041168 200.083878,240.559296 199.944275,247.755112
z"/>
                            <path fill="#EEEEEE" opacity="1.000000" stroke="none"
                                  d="
M350.658020,244.030624
	C351.690155,245.636673 352.538727,247.215164 352.683960,248.855896
	C352.726746,249.339020 350.836456,250.280716 349.729004,250.506409
	C348.305176,250.796570 346.777527,250.576981 344.974945,250.576981
	C344.974945,254.462112 344.974945,258.037140 344.974945,262.200623
	C347.034515,262.200623 349.171021,262.432007 351.239471,262.155029
	C356.407532,261.463074 357.860016,263.759155 356.615601,268.709106
	C350.629028,268.709106 344.556610,268.709106 338.251923,268.709106
	C338.251923,254.318741 338.251923,240.079834 338.251923,225.212631
	C343.695801,225.212631 349.017700,224.835739 354.217957,225.464691
	C355.602295,225.632095 356.613678,228.883026 358.513031,231.830444
	C352.922028,231.830444 349.151947,231.830444 345.033447,231.830444
	C345.033447,235.934113 345.033447,239.667404 345.033447,244.026825
	C346.678986,244.026825 348.442413,244.026825 350.658020,244.030624
z"/>
                            <path fill="#F1F1F1" opacity="1.000000" stroke="none"
                                  d="
M109.059807,232.414978
	C112.566154,225.585358 116.942581,223.410629 123.118523,225.046509
	C128.016815,226.343933 130.736115,230.082306 130.774506,237.260727
	C128.007309,235.661423 126.014053,234.348892 123.881744,233.326355
	C122.081062,232.462830 119.797256,231.006439 118.318375,231.518753
	C116.816406,232.039062 115.173637,234.608215 115.092773,236.349762
	C114.745949,243.819382 114.773407,251.322708 115.109444,258.793732
	C115.175652,260.265747 117.019279,262.559204 118.382660,262.843018
	C120.081085,263.196564 123.325233,262.345856 123.808777,261.160950
	C125.325966,257.443207 127.819954,258.061768 130.556473,258.362610
	C131.069870,263.642273 127.427872,268.836578 122.653976,269.841125
	C117.143120,271.000702 109.642578,267.478485 109.288635,262.439178
	C108.598122,252.607651 109.043312,242.696365 109.059807,232.414978
z"/>
                            <path fill="#F4F4F4" opacity="1.000000" stroke="none"
                                  d="
M236.580429,232.097168
	C239.718170,226.318863 243.495850,223.984375 248.408142,224.624588
	C254.185501,225.377563 256.999756,228.341049 258.749115,235.698975
	C255.777802,235.874008 252.760025,237.276108 250.969315,233.103165
	C250.494278,231.996185 247.577713,230.808640 246.587662,231.295639
	C244.761322,232.193954 242.355667,234.233963 242.254562,235.921890
	C241.798508,243.535309 241.837387,251.204880 242.266068,258.822235
	C242.351120,260.333588 244.764313,262.578064 246.407867,262.891724
	C248.015228,263.198456 250.839340,261.957428 251.673172,260.539459
	C253.760498,256.989868 255.987152,258.003845 258.627075,259.107178
	C256.747437,267.193817 252.314850,270.746399 245.411438,269.895996
	C239.627838,269.183502 235.970184,264.166016 236.014435,256.815979
	C236.063400,248.684555 236.212540,240.553757 236.580429,232.097168
z"/>
                            <path fill="#EBEBEB" opacity="1.000000" stroke="none"
                                  d="
M349.047668,281.617035
	C345.002441,279.383026 342.150421,281.177734 342.068390,285.714996
	C341.954987,291.988373 342.039917,298.265320 342.039917,304.540710
	C341.606476,304.671844 341.173035,304.802979 340.739594,304.934113
	C340.178864,303.865723 339.151337,302.805664 339.132111,301.727600
	C338.992889,293.924866 339.057404,286.118500 339.057404,278.922302
	C341.191315,278.506592 342.879852,277.970093 344.591156,277.883392
	C349.600983,277.629639 354.629395,277.345306 359.628052,277.570770
	C360.754395,277.621552 362.680725,279.663239 362.722443,280.842072
	C363.000336,288.696808 362.866608,296.566132 362.866608,304.430695
	C362.335907,304.536499 361.805206,304.642334 361.274506,304.748169
	C360.851746,303.652954 360.087769,302.565247 360.063599,301.461304
	C359.939606,295.803802 360.007477,290.142120 360.005341,284.481903
	C360.004486,282.304108 360.194794,279.425201 357.025116,280.176300
	C355.400482,280.561310 353.270538,282.963379 353.112335,284.620361
	C352.608246,289.899689 353.007263,295.259430 352.862671,300.582825
	C352.823334,302.030670 352.097229,303.459869 351.686310,304.897614
	C351.101440,304.810150 350.516571,304.722656 349.931702,304.635193
	C349.674713,297.106750 349.417694,289.578339 349.047668,281.617035
z"/>
                            <path fill="#E7E7E7" opacity="1.000000" stroke="none"
                                  d="
M375.262848,305.008087
	C371.378845,304.358459 369.914520,302.224304 369.965271,298.763458
	C370.040863,293.612518 370.059692,288.458282 369.963898,283.308014
	C369.877960,278.685883 372.900604,277.371216 376.609039,277.085175
	C380.602600,276.777161 383.373260,278.634003 383.812744,282.804657
	C384.106262,285.589691 383.868500,288.430725 383.868500,291.744080
	C380.355255,291.744080 376.968109,291.744080 373.011993,291.744080
	C373.011993,294.320618 372.645996,296.502197 373.137756,298.469360
	C373.478302,299.831635 374.896759,301.732330 376.024506,301.874146
	C377.278900,302.031921 378.824677,300.567749 380.101807,299.618774
	C381.043823,298.918854 381.758240,297.912689 382.574066,297.042938
	C382.820587,298.399841 383.545563,299.883636 383.225433,301.090210
	C382.199463,304.957062 378.979218,305.185486 375.262848,305.008087
M374.043365,280.520203
	C373.617371,283.289337 373.191376,286.058441 372.767944,288.810669
	C375.752869,288.810669 377.827332,288.810669 379.873932,288.810669
	C380.539551,280.147400 380.492401,280.069092 374.043365,280.520203
z"/>
                            <path fill="#E8E8E8" opacity="1.000000" stroke="none"
                                  d="
M215.918945,297.068573
	C217.203003,301.802979 215.598129,304.535095 211.694336,305.001648
	C206.280807,305.648651 203.164902,303.512604 203.070862,298.891510
	C202.966187,293.747406 203.153290,288.596710 203.015808,283.454163
	C202.893127,278.865204 205.756546,277.420837 209.515381,277.081268
	C213.878769,276.687134 216.598175,278.938263 216.907822,283.120972
	C217.113022,285.892975 216.946701,288.692444 216.946701,291.927765
	C213.220810,291.927765 209.815384,291.927765 206.027985,291.927765
	C206.027985,294.151031 205.658478,296.035553 206.133194,297.675720
	C206.596420,299.276184 207.613281,301.376526 208.937363,301.922302
	C211.273972,302.885315 213.348892,301.894165 213.901703,298.906799
	C214.032547,298.199677 214.957352,297.639496 215.918945,297.068573
M210.411026,279.969727
	C203.858688,280.710327 206.478119,285.321564 206.249023,288.758331
	C209.071030,288.758331 211.481155,288.758331 215.271332,288.758331
	C213.685928,285.318298 212.465714,282.670654 210.411026,279.969727
z"/>
                            <path fill="#E3E3E3" opacity="1.000000" stroke="none"
                                  d="
M75.105675,302.276367
	C75.106979,294.355042 75.111588,286.873352 75.129204,279.391663
	C75.129967,279.066742 75.250221,278.742096 75.192909,279.030243
	C77.309456,278.505432 79.183273,278.216675 80.926735,277.574188
	C85.418007,275.919128 88.975044,278.064301 89.029854,282.750916
	C89.114693,290.005920 89.052231,297.262695 89.052231,304.518707
	C88.488167,304.638519 87.924103,304.758331 87.360039,304.878143
	C86.911926,303.498779 86.115234,302.128998 86.077164,300.738434
	C85.927063,295.255890 86.203743,289.756012 85.890427,284.287323
	C85.805748,282.809448 84.201439,281.418671 83.294647,279.987915
	C81.815598,281.411316 79.196930,282.733978 79.060570,284.276093
	C78.549973,290.050385 78.914749,295.897858 78.785645,301.714233
	C78.764015,302.688690 77.920799,303.644897 77.457199,304.609558
	C76.675262,303.978363 75.893333,303.347137 75.105675,302.276367
z"/>
                            <path fill="#E0E0E0" opacity="1.000000" stroke="none"
                                  d="
M274.024689,285.289246
	C273.121368,283.214691 272.218079,281.604645 271.314789,279.994629
	C269.790314,281.577057 267.147766,283.032196 266.950409,284.765717
	C266.351501,290.026825 266.819458,295.400787 266.591034,300.718750
	C266.534790,302.028809 265.410706,303.292969 264.777496,304.578217
	C264.199524,303.396667 263.145691,302.224915 263.121216,301.032013
	C262.967773,293.548950 263.043610,286.061188 263.043610,278.756744
	C265.092926,278.385101 267.008636,278.296783 268.730499,277.673096
	C272.674500,276.244629 276.709106,277.549957 276.884064,281.118988
	C277.263763,288.864899 277.001160,296.642334 277.001160,304.717224
	C274.020660,303.106323 274.020660,303.106323 274.024689,285.289246
z"/>
                            <path fill="#EBEBEB" opacity="1.000000" stroke="none"
                                  d="
M166.956177,280.296356
	C169.593323,276.812897 172.625732,276.445435 176.302185,277.716400
	C180.271011,279.088440 180.092194,282.109924 180.036240,285.321075
	C179.958267,289.796509 179.822968,294.285187 180.074677,298.747772
	C180.296585,302.682037 178.586594,304.594238 174.851639,304.994812
	C170.926361,305.415710 166.739105,304.862549 166.377228,300.354797
	C165.855728,293.858521 166.626984,287.258484 166.956177,280.296356
M177.062912,296.290222
	C177.062424,292.482330 177.069626,288.674438 177.058578,284.866577
	C177.051910,282.564575 177.486008,280.118713 173.893738,279.923309
	C170.295273,279.727600 169.188370,281.824432 169.077972,284.749207
	C168.921951,288.882355 168.944885,293.028503 169.071030,297.163635
	C169.145340,299.599976 169.148285,302.100555 172.854233,302.200439
	C176.655090,302.302826 177.374527,300.335449 177.062912,296.290222
z"/>
                            <path fill="#EBEBEB" opacity="1.000000" stroke="none"
                                  d="
M66.914795,290.096039
	C67.904213,295.087891 68.857849,299.655090 69.811485,304.222290
	C69.328110,304.502228 68.844742,304.782196 68.361366,305.062164
	C65.677223,301.848114 65.224701,294.976532 58.493542,298.543091
	C57.622311,300.452332 56.599796,302.693115 55.577282,304.933899
	C54.941685,304.707214 54.306084,304.480560 53.670486,304.253876
	C55.550442,295.617615 57.430397,286.981323 59.305271,278.368408
	C62.868839,277.350281 64.827286,278.008667 65.062447,282.060944
	C65.211197,284.624268 66.243172,287.136322 66.914795,290.096039
M59.355015,292.022797
	C59.229843,293.238464 59.104668,294.454132 58.985069,295.615723
	C61.236698,295.615723 63.064713,295.615723 64.952248,295.615723
	C63.888752,291.246796 62.913940,287.242188 61.588837,281.798553
	C60.816868,285.991455 60.327736,288.648102 59.355015,292.022797
z"/>
                            <path fill="#EBEBEB" opacity="1.000000" stroke="none"
                                  d="
M252.416840,298.158752
	C250.188187,298.055176 248.369476,298.055176 246.694122,298.055176
	C245.584442,300.499390 244.559265,302.757477 243.534088,305.015564
	C242.901764,304.784668 242.269455,304.553741 241.637131,304.322845
	C243.523300,295.649200 245.409470,286.975586 247.270981,278.415344
	C250.731735,277.112030 252.284210,278.384827 252.982346,281.625519
	C254.427841,288.335358 256.120605,294.991730 257.597046,301.695374
	C257.793213,302.585999 257.321167,303.623779 257.158569,304.593384
	C256.726990,304.681000 256.295441,304.768616 255.863846,304.856232
	C254.851501,302.658264 253.839157,300.460297 252.416840,298.158752
M251.548233,289.906708
	C250.981033,287.717316 250.413818,285.527954 249.502686,282.011047
	C248.406845,287.561676 247.604767,291.624268 246.730713,296.051453
	C249.109833,295.920990 250.711533,295.833160 252.481979,295.736084
	C252.278046,293.826935 252.106934,292.225250 251.548233,289.906708
z"/>
                            <path fill="#EEEEEE" opacity="1.000000" stroke="none"
                                  d="
M156.305420,278.465485
	C157.378006,278.739258 158.874847,279.385406 158.890030,280.064636
	C159.057159,287.546783 159.039734,295.034790 158.925537,302.518951
	C158.913437,303.312134 157.967407,304.091064 156.285568,304.528778
	C156.285568,300.522614 156.285568,296.516418 156.285568,292.274170
	C153.287766,292.274170 150.886154,292.274170 147.835312,292.274170
	C147.835312,296.321625 147.835312,300.335480 147.835312,304.747772
	C145.101074,302.925720 143.788467,288.507172 145.107285,280.025635
	C145.239563,279.174988 146.218445,278.456024 146.804428,277.675934
	C147.197845,277.846191 147.591263,278.016418 147.984680,278.186676
	C147.984680,281.762299 147.984680,285.337921 147.984680,289.120728
	C150.751862,289.120728 153.035309,289.120728 156.041626,289.120728
	C156.041626,285.701996 156.041626,282.277588 156.305420,278.465485
z"/>
                            <path fill="#E0E0E0" opacity="1.000000" stroke="none"
                                  d="
M127.936569,291.968933
	C127.938286,294.619690 127.601006,296.862183 128.070572,298.920624
	C128.346207,300.128906 129.921860,301.904602 130.883881,301.886566
	C132.270294,301.860535 133.767136,300.591858 134.953888,299.553040
	C135.748581,298.857422 136.087143,297.640686 137.227249,295.574310
	C138.688324,300.944244 138.100632,303.962891 133.618164,304.965759
	C128.653976,306.076447 125.038078,304.026886 124.654846,299.343231
	C124.222366,294.057892 124.230209,288.696167 124.564056,283.400299
	C124.870613,278.537170 127.511040,276.482788 131.987183,277.052948
	C136.176926,277.586700 138.584015,279.801636 138.032089,284.365753
	C137.936295,285.157959 137.898026,285.957062 137.833176,286.752991
	C137.395218,286.919922 136.957260,287.086823 136.519287,287.253754
	C136.021149,286.198425 135.083618,285.132690 135.108337,284.089752
	C135.178879,281.113342 134.094879,279.815308 131.019379,279.948395
	C127.748924,280.089935 127.913704,282.255402 127.933731,284.488190
	C127.954643,286.819733 127.937225,289.151611 127.936569,291.968933
z"/>
                            <path fill="#E3E3E3" opacity="1.000000" stroke="none"
                                  d="
M95.078995,287.807983
	C95.078903,284.380981 95.078903,281.414368 95.078903,278.447723
	C95.526886,278.169647 95.974861,277.891541 96.422844,277.613434
	C97.193817,278.624176 98.523888,279.579742 98.630035,280.656067
	C98.938103,283.779602 98.810669,286.952759 98.747261,290.104248
	C98.696587,292.622894 99.310883,294.217926 102.333153,294.163940
	C105.145226,294.113708 106.154129,292.914276 106.075806,290.209290
	C105.961098,286.247864 106.046280,282.280640 106.046280,276.828339
	C107.787216,278.442474 109.142395,279.083099 109.345284,279.983398
	C111.152817,288.004333 109.062424,294.878113 104.320953,297.219604
	C103.996643,299.724915 103.674004,302.227875 103.351364,304.730835
	C102.683540,304.701996 102.015724,304.673126 101.347900,304.644257
	C101.162277,302.331940 100.976654,300.019592 100.751091,297.209747
	C96.062721,296.306274 94.331467,293.044769 95.078995,287.807983
z"/>
                            <path fill="#E3E3E3" opacity="1.000000" stroke="none"
                                  d="
M283.050781,284.069855
	C283.378754,281.645935 283.706635,279.693329 284.034546,277.740692
	C284.706665,277.840118 285.378784,277.939545 286.050903,278.038971
	C286.050903,281.800751 286.074402,285.562714 286.043213,289.324249
	C286.019470,292.186096 286.888123,294.043457 290.221130,294.152283
	C293.893311,294.272186 294.162292,292.102814 294.087616,289.320618
	C293.990234,285.690796 294.063782,282.056335 295.154449,277.633392
	C295.988037,278.495697 297.520691,279.345856 297.535950,280.222412
	C297.607635,284.338928 297.379639,288.473877 296.990448,292.576752
	C296.881531,293.724976 296.065399,295.520721 295.218933,295.758972
	C291.798615,296.721527 291.799438,299.092072 291.905609,301.842957
	C291.942688,302.803192 291.275909,303.790558 289.880890,304.761627
	C289.579315,303.798981 288.938202,302.799438 289.038055,301.880371
	C289.374969,298.778748 288.360474,297.121948 285.405518,295.497223
	C281.021301,293.086517 283.726562,288.263367 283.050781,284.069855
z"/>
                            <path fill="#E0E0E0" opacity="1.000000" stroke="none"
                                  d="
M320.321045,295.375031
	C321.419220,296.062866 323.030762,297.236298 322.870300,298.067780
	C322.435211,300.322388 321.763519,303.040588 320.177063,304.383209
	C319.133270,305.266571 316.013184,304.619812 314.436127,303.655365
	C313.192993,302.895172 312.318726,300.623871 312.262146,298.989746
	C312.026825,292.193207 312.163208,285.383789 312.163208,278.269257
	C315.533325,278.269257 318.604462,278.269257 321.675568,278.269257
	C321.822571,278.656616 321.969574,279.043945 322.116547,279.431305
	C320.280060,280.095642 318.443542,280.759979 316.181213,281.578339
	C316.181213,287.937012 316.181213,294.846313 316.181213,301.911743
	C321.617004,302.178802 319.351105,298.052216 320.321045,295.375031
z"/>
                            <path fill="#F0F0F0" opacity="1.000000" stroke="none"
                                  d="
M195.690567,277.196350
	C200.096085,279.221985 199.064270,282.499573 197.616409,286.095825
	C197.094345,285.148163 196.560928,284.206512 196.053223,283.251190
	C195.481110,282.174591 194.932144,281.085754 194.373108,280.002228
	C193.182480,280.914368 191.656311,281.612518 190.898544,282.800720
	C190.185974,283.918060 190.083023,285.549530 190.061417,286.960144
	C189.975418,292.576813 190.026001,298.195526 190.026001,303.813507
	C189.550873,303.962463 189.075745,304.111420 188.600616,304.260376
	C188.122330,303.157288 187.248001,302.060699 187.229736,300.950073
	C187.106873,293.480621 187.165756,286.008209 187.165756,278.916138
	C190.042877,278.273010 192.673157,277.685059 195.690567,277.196350
z"/>
                            <path fill="#D7D7D7" opacity="1.000000" stroke="none"
                                  d="
M328.081848,282.234253
	C328.666809,280.493774 329.251495,279.225189 329.836151,277.956573
	C330.522461,279.130676 331.764435,280.287231 331.802124,281.481812
	C332.000793,287.777924 332.019897,294.087921 331.802246,300.382751
	C331.752350,301.825989 330.524780,303.228485 329.839142,304.649750
	C329.253143,303.140045 328.214264,301.645905 328.161621,300.117798
	C327.961945,294.319885 328.081451,288.510956 328.081848,282.234253
z"/>
                            <path fill="#CACACA" opacity="1.000000" stroke="none"
                                  d="
M180.695328,143.164673
	C182.041168,146.465439 182.962051,149.905533 183.526581,153.648499
	C182.144547,151.837463 181.118851,149.723587 179.935791,147.285355
	C179.935791,164.652863 179.935791,181.842224 179.968246,199.032166
	C180.000702,199.032715 180.005646,198.968018 180.005646,198.968018
	C179.664993,197.830811 179.032150,196.694778 179.027618,195.556244
	C178.962845,179.282333 178.957031,163.007996 179.037979,146.734238
	C179.043686,145.588821 179.841095,144.447327 180.695328,143.164673
z"/>
                            <path fill="#D7D7D7" opacity="1.000000" stroke="none"
                                  d="
M267.029846,198.184479
	C267.456329,197.515625 267.864807,197.186752 268.548340,196.945007
	C274.067413,197.032135 279.311493,197.032135 284.555542,197.032135
	C284.726776,197.346436 284.897980,197.660736 285.069214,197.975037
	C284.234344,198.601044 283.414795,199.743103 282.562134,199.768372
	C277.469330,199.919373 272.368835,199.819580 267.271881,199.739960
	C267.178894,199.738510 267.098236,198.947205 267.029846,198.184479
z"/>
                            <path fill="#D7D7D7" opacity="1.000000" stroke="none"
                                  d="
M257.204315,196.041931
	C258.067139,196.458038 258.929962,196.874130 259.879028,197.585144
	C259.500397,198.538635 259.001556,199.785431 258.576080,199.760864
	C255.678635,199.593643 252.796631,199.158722 249.961456,198.373535
	C250.013290,197.936859 249.827072,197.546204 250.275208,197.177139
	C252.883682,196.552689 255.043991,196.297318 257.204315,196.041931
z"/>
                            <path fill="#E0E0E0" opacity="1.000000" stroke="none"
                                  d="
M225.523682,289.342743
	C229.335327,289.753906 233.159225,288.024994 236.120010,290.485321
	C236.072571,291.008362 236.025131,291.531372 235.977692,292.054382
	C232.589645,292.054382 229.198166,292.118835 225.819611,291.939850
	C225.529373,291.924500 225.324677,290.294464 225.523682,289.342743
z"/>
                            <path fill="#A8A8A8" opacity="1.000000" stroke="none"
                                  d="
M201.947662,195.996078
	C202.322556,196.454498 202.697449,196.912918 203.036453,197.688385
	C202.183426,198.672852 201.373001,199.908188 200.548096,199.917938
	C193.821182,199.997498 187.091568,199.848053 180.184204,199.368134
	C180.005646,198.968018 180.000702,199.032715 180.440643,199.014130
	C187.692673,198.995544 194.504761,198.995544 200.830566,198.995544
	C201.312698,197.701019 201.630188,196.848557 201.947662,195.996078
z"/>
                            <path fill="#CACACA" opacity="1.000000" stroke="none"
                                  d="
M224.255081,198.119751
	C224.464859,197.234894 224.889038,196.674713 225.997742,196.050949
	C227.799957,196.018494 228.917679,196.049622 230.035385,196.080750
	C230.035385,196.080750 230.175186,196.508484 230.081299,196.712967
	C230.478226,202.080353 226.489716,199.105530 224.574326,199.897018
	C224.539368,199.412827 224.504410,198.928619 224.255081,198.119751
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M183.334274,58.137573
	C182.952606,51.269558 182.952606,44.451347 182.952606,37.232964
	C184.222931,37.123753 185.478912,36.923840 186.735184,36.921883
	C200.550903,36.900375 214.368958,37.071514 228.181961,36.877037
	C257.163879,36.469002 281.281189,60.149567 281.060516,89.758995
	C280.900482,111.229607 281.072113,132.702682 281.061462,154.650513
	C275.378052,153.417633 273.071716,148.951828 271.149353,143.836365
	C267.574036,134.322342 260.768738,129.832581 248.945435,128.853271
	C251.904266,124.015602 254.832092,119.387085 257.565765,114.646614
	C258.240753,113.476143 259.002380,111.555061 258.506683,110.634987
	C253.980942,102.234985 249.824799,93.271744 241.348663,88.150406
	C237.389603,85.758324 232.252945,85.315224 226.694916,83.713493
	C227.568832,82.049637 228.411636,79.448891 230.045547,77.517372
	C235.357483,71.237915 237.248672,64.303642 235.012604,56.348003
	C232.308411,46.726784 222.489197,43.477642 214.877655,49.953201
	C212.178070,52.249882 210.130035,54.784573 206.053024,53.344238
	C204.994553,52.970306 203.468430,53.641533 202.252045,54.090107
	C201.427643,54.394138 200.071884,55.366619 200.164047,55.660240
	C200.468155,56.629002 201.143723,57.828529 202.000732,58.208447
	C204.193253,59.180401 206.560577,59.757996 208.946503,60.521641
	C209.307755,67.199623 210.662842,73.471054 215.839172,78.442909
	C216.816223,79.381393 216.893341,81.831146 216.514191,83.368607
	C216.320282,84.154831 214.147278,85.006554 212.953781,84.897583
	C207.562698,84.405312 204.264481,86.506729 202.522491,91.705002
	C201.435928,94.947433 199.665253,97.965836 198.141907,101.055359
	C196.198639,104.996544 194.384018,105.248337 191.369293,101.905403
	C189.495850,99.828011 187.883255,97.514084 185.993744,95.452858
	C184.386215,93.699234 182.549957,92.155266 181.300049,90.051353
	C181.862854,81.725044 181.940521,73.865921 182.018173,66.006798
	C186.686615,63.895363 187.311157,61.018940 183.334274,58.137573
z"/>
                            <path fill="#020202" opacity="1.000000" stroke="none"
                                  d="
M257.164673,195.636749
	C255.043991,196.297318 252.883682,196.552689 250.338577,196.970245
	C250.074814,189.136078 249.476761,188.498505 241.334808,188.069473
	C240.893356,182.347488 240.349487,176.613556 240.031113,170.867126
	C239.536560,161.940704 239.055771,153.009232 238.835663,144.073318
	C238.673340,137.483276 244.359909,132.982605 250.825012,134.102631
	C258.653259,135.458817 264.802429,138.813248 266.433197,145.244949
	C264.553619,150.680832 262.390656,154.534561 262.017334,158.554489
	C261.389618,165.314148 262.098206,172.188080 261.802582,178.994736
	C261.719818,180.899384 260.486206,183.139954 259.086182,184.524109
	C255.802017,187.770935 255.122620,191.174072 257.164673,195.636749
z"/>
                            <path fill="#010101" opacity="1.000000" stroke="none"
                                  d="
M182.992783,107.924072
	C185.278519,110.047508 187.609390,112.124733 189.840668,114.303902
	C194.641510,118.992561 196.267838,119.093887 201.532639,114.780983
	C202.525497,113.967628 203.420929,113.035339 204.983734,111.577202
	C204.983734,116.178116 204.903351,120.061729 204.998947,123.941010
	C205.275040,135.144165 206.055542,146.361603 205.642044,157.536591
	C205.536194,160.397095 202.180023,163.745529 199.461243,165.644073
	C198.105789,166.590591 193.783234,165.551117 192.629776,164.027176
	C190.572891,161.309601 189.462509,157.636108 188.732193,154.197571
	C186.236908,142.449020 184.079132,130.628815 182.109421,118.160568
	C182.615097,114.298149 182.803940,111.111115 182.992783,107.924072
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M201.995956,195.600418
	C201.630188,196.848557 201.312698,197.701019 200.830566,198.995544
	C194.504761,198.995544 187.692673,198.995544 180.408188,199.013580
	C179.935791,181.842224 179.935791,164.652863 179.935791,147.285355
	C181.118851,149.723587 182.144547,151.837463 183.547516,154.041092
	C183.910721,159.758987 185.335693,164.942917 189.579239,168.815552
	C194.644745,173.438324 198.466843,172.929581 207.310028,166.894852
	C209.425568,174.570496 211.513458,182.145859 213.596680,189.704285
	C202.891464,189.540390 202.891464,189.540390 201.995956,195.600418
z"/>
                            <path fill="#020202" opacity="1.000000" stroke="none"
                                  d="
M234.512329,116.390732
	C234.768799,110.670967 235.178635,105.360138 235.590637,100.021194
	C239.385956,103.447525 242.746658,106.311668 245.855927,109.426765
	C246.505127,110.077202 246.661942,111.820831 246.297958,112.775673
	C244.797302,116.712563 243.120361,120.595268 241.242752,124.365707
	C240.807434,125.239868 239.326233,126.043922 238.326584,126.043579
	C237.528580,126.043312 236.272507,124.904152 236.021576,124.038177
	C235.341568,121.691414 235.088242,119.221024 234.512329,116.390732
z"/>
                            <path fill="#020202" opacity="1.000000" stroke="none"
                                  d="
M230.064713,195.641434
	C228.917679,196.049622 227.799957,196.018494 226.262405,196.007782
	C224.893799,189.075302 223.873016,182.131226 223.017853,175.166809
	C222.260803,169.001312 221.668869,162.815033 221.071426,156.631409
	C221.025146,156.152359 221.511551,155.621796 222.189987,154.182571
	C224.297104,164.516983 226.238815,173.821045 228.074539,183.145966
	C228.861267,187.142334 229.427567,191.182083 230.064713,195.641434
z"/>
                            <path fill="#969696" opacity="1.000000" stroke="none"
                                  d="
M179.018356,87.012024
	C177.420532,86.056267 174.835999,85.415504 174.411346,84.085236
	C173.175858,80.215004 171.902100,75.938553 172.457840,72.082962
	C172.757385,70.004814 176.770325,68.461914 179.359833,67.077286
	C179.413986,73.988716 179.216171,80.500366 179.018356,87.012024
z"/>
                            <path fill="#F0F0F0" opacity="1.000000" stroke="none"
                                  d="
M179.011246,86.992081
	C179.216171,80.500366 179.413986,73.988716 179.787811,66.956696
	C180.494751,66.285172 181.025696,66.134003 181.787415,65.994812
	C181.940521,73.865921 181.862854,81.725044 181.354919,89.644936
	C180.924637,89.705704 180.931046,89.597305 180.904465,89.240768
	C180.574631,88.578300 180.271362,88.272362 179.968109,87.966423
	C179.968109,87.966423 180.026627,87.977585 179.977081,87.719101
	C179.605545,87.300079 179.283539,87.139549 178.961533,86.979012
	C178.961533,86.979012 179.004135,86.972130 179.011246,86.992081
z"/>
                            <path fill="#A8A8A8" opacity="1.000000" stroke="none"
                                  d="
M183.031845,107.574303
	C182.803940,111.111115 182.615097,114.298149 182.081665,117.732361
	C180.260223,112.383057 178.783356,106.786583 177.306488,101.190102
	C177.644913,101.070992 177.983337,100.951881 178.321762,100.832764
	C179.904800,102.963356 181.487854,105.093941 183.031845,107.574303
z"/>
                            <path fill="#969696" opacity="1.000000" stroke="none"
                                  d="
M180.000671,88.315369
	C180.271362,88.272362 180.574631,88.578300 180.950592,89.212128
	C180.693268,89.248116 180.363266,88.956207 180.000671,88.315369
z"/>
                            <path fill="#969696" opacity="1.000000" stroke="none"
                                  d="
M179.016449,87.262428
	C179.283539,87.139549 179.605545,87.300079 179.975647,87.748856
	C179.706284,87.873344 179.388824,87.709595 179.016449,87.262428
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M167.838379,233.306519
	C169.907211,233.007126 173.508759,232.705124 173.720306,233.414307
	C174.615616,236.415741 175.139816,239.861847 174.465683,242.843842
	C174.168777,244.157227 170.686600,244.750519 167.811661,246.049911
	C167.811661,241.027786 167.811661,237.398438 167.838379,233.306519
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M323.677216,231.955353
	C330.212006,233.209152 328.318756,238.248642 327.700104,241.498657
	C327.339661,243.392105 323.580963,244.638687 321.351288,246.176300
	C320.906647,245.766724 320.462036,245.357132 320.017395,244.947540
	C320.017395,241.515076 320.202545,238.069412 319.959320,234.654266
	C319.761871,231.881790 321.224365,231.735962 323.677216,231.955353
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M144.306366,263.056519
	C142.918320,261.077179 141.240311,259.183868 141.132050,257.204681
	C140.779358,250.756393 140.934494,244.275803 141.027313,237.809555
	C141.074722,234.505722 141.909332,231.169632 145.906708,231.109039
	C150.114655,231.045258 151.188690,234.109558 151.116791,237.896118
	C150.997177,244.195572 150.930908,250.504028 151.136871,256.799042
	C151.289246,261.456573 149.527313,263.698029 144.306366,263.056519
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M303.527557,260.135803
	C302.317200,263.930481 299.337006,263.705750 297.240082,262.855927
	C295.748199,262.251251 294.168793,259.821136 294.086578,258.134644
	C293.739624,251.017776 293.584290,243.845184 294.163422,236.758743
	C294.329620,234.725174 296.964813,231.626709 298.874847,231.283905
	C302.164795,230.693436 304.046692,233.371490 304.007904,236.915222
	C303.924469,244.540451 303.868958,252.166000 303.527557,260.135803
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M217.010010,253.090820
	C217.768723,248.543472 218.552094,244.439087 219.335449,240.334702
	C219.627518,240.286148 219.919571,240.237610 220.211639,240.189072
	C221.183594,244.524139 222.155548,248.859222 223.306580,253.992996
	C220.982376,253.822830 219.008514,253.678299 217.010010,253.090820
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M374.419434,280.293457
	C380.492401,280.069092 380.539551,280.147400 379.873932,288.810669
	C377.827332,288.810669 375.752869,288.810669 372.767944,288.810669
	C373.191376,286.058441 373.617371,283.289337 374.419434,280.293457
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M210.828262,279.996368
	C212.465714,282.670654 213.685928,285.318298 215.271332,288.758331
	C211.481155,288.758331 209.071030,288.758331 206.249023,288.758331
	C206.478119,285.321564 203.858688,280.710327 210.828262,279.996368
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M177.062866,296.760468
	C177.374527,300.335449 176.655090,302.302826 172.854233,302.200439
	C169.148285,302.100555 169.145340,299.599976 169.071030,297.163635
	C168.944885,293.028503 168.921951,288.882355 169.077972,284.749207
	C169.188370,281.824432 170.295273,279.727600 173.893738,279.923309
	C177.486008,280.118713 177.051910,282.564575 177.058578,284.866577
	C177.069626,288.674438 177.062424,292.482330 177.062866,296.760468
z"/>
                            <path fill="#000000" opacity="1.000000" stroke="none"
                                  d="
M59.596809,291.663788
	C60.327736,288.648102 60.816868,285.991455 61.588837,281.798553
	C62.913940,287.242188 63.888752,291.246796 64.952248,295.615723
	C63.064713,295.615723 61.236698,295.615723 58.985069,295.615723
	C59.104668,294.454132 59.229843,293.238464 59.596809,291.663788
z"/>
                            <path fill="#020202" opacity="1.000000" stroke="none"
                                  d="
M251.742035,290.265137
	C252.106934,292.225250 252.278046,293.826935 252.481979,295.736084
	C250.711533,295.833160 249.109833,295.920990 246.730713,296.051453
	C247.604767,291.624268 248.406845,287.561676 249.502686,282.011047
	C250.413818,285.527954 250.981033,287.717316 251.742035,290.265137
z"/>


                    </svg>


                    <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
                </div>
            </main>
        </div>

        @if (Route::has('login'))
            <div class="h-14.5 hidden lg:block"></div>
        @endif
    </body>
</html>
