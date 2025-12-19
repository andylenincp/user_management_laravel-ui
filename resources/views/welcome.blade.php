<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
        @layer theme {

            :root,
            :host {
                --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                --font-serif: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
                --font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                --color-red-50: oklch(.971 .013 17.38);
                --color-red-100: oklch(.936 .032 17.717);
                --color-red-200: oklch(.885 .062 18.334);
                --color-red-300: oklch(.808 .114 19.571);
                --color-red-400: oklch(.704 .191 22.216);
                --color-red-500: oklch(.637 .237 25.331);
                --color-red-600: oklch(.577 .245 27.325);
                --color-red-700: oklch(.505 .213 27.518);
                --color-red-800: oklch(.444 .177 26.899);
                --color-red-900: oklch(.396 .141 25.723);
                --color-red-950: oklch(.258 .092 26.042);
                --color-orange-50: oklch(.98 .016 73.684);
                --color-orange-100: oklch(.954 .038 75.164);
                --color-orange-200: oklch(.901 .076 70.697);
                --color-orange-300: oklch(.837 .128 66.29);
                --color-orange-400: oklch(.75 .183 55.934);
                --color-orange-500: oklch(.705 .213 47.604);
                --color-orange-600: oklch(.646 .222 41.116);
                --color-orange-700: oklch(.553 .195 38.402);
                --color-orange-800: oklch(.47 .157 37.304);
                --color-orange-900: oklch(.408 .123 38.172);
                --color-orange-950: oklch(.266 .079 36.259);
                --color-amber-50: oklch(.987 .022 95.277);
                --color-amber-100: oklch(.962 .059 95.617);
                --color-amber-200: oklch(.924 .12 95.746);
                --color-amber-300: oklch(.879 .169 91.605);
                --color-amber-400: oklch(.828 .189 84.429);
                --color-amber-500: oklch(.769 .188 70.08);
                --color-amber-600: oklch(.666 .179 58.318);
                --color-amber-700: oklch(.555 .163 48.998);
                --color-amber-800: oklch(.473 .137 46.201);
                --color-amber-900: oklch(.414 .112 45.904);
                --color-amber-950: oklch(.279 .077 45.635);
                --color-yellow-50: oklch(.987 .026 102.212);
                --color-yellow-100: oklch(.973 .071 103.193);
                --color-yellow-200: oklch(.945 .129 101.54);
                --color-yellow-300: oklch(.905 .182 98.111);
                --color-yellow-400: oklch(.852 .199 91.936);
                --color-yellow-500: oklch(.795 .184 86.047);
                --color-yellow-600: oklch(.681 .162 75.834);
                --color-yellow-700: oklch(.554 .135 66.442);
                --color-yellow-800: oklch(.476 .114 61.907);
                --color-yellow-900: oklch(.421 .095 57.708);
                --color-yellow-950: oklch(.286 .066 53.813);
                --color-lime-50: oklch(.986 .031 120.757);
                --color-lime-100: oklch(.967 .067 122.328);
                --color-lime-200: oklch(.938 .127 124.321);
                --color-lime-300: oklch(.897 .196 126.665);
                --color-lime-400: oklch(.841 .238 128.85);
                --color-lime-500: oklch(.768 .233 130.85);
                --color-lime-600: oklch(.648 .2 131.684);
                --color-lime-700: oklch(.532 .157 131.589);
                --color-lime-800: oklch(.453 .124 130.933);
                --color-lime-900: oklch(.405 .101 131.063);
                --color-lime-950: oklch(.274 .072 132.109);
                --color-green-50: oklch(.982 .018 155.826);
                --color-green-100: oklch(.962 .044 156.743);
                --color-green-200: oklch(.925 .084 155.995);
                --color-green-300: oklch(.871 .15 154.449);
                --color-green-400: oklch(.792 .209 151.711);
                --color-green-500: oklch(.723 .219 149.579);
                --color-green-600: oklch(.627 .194 149.214);
                --color-green-700: oklch(.527 .154 150.069);
                --color-green-800: oklch(.448 .119 151.328);
                --color-green-900: oklch(.393 .095 152.535);
                --color-green-950: oklch(.266 .065 152.934);
                --color-emerald-50: oklch(.979 .021 166.113);
                --color-emerald-100: oklch(.95 .052 163.051);
                --color-emerald-200: oklch(.905 .093 164.15);
                --color-emerald-300: oklch(.845 .143 164.978);
                --color-emerald-400: oklch(.765 .177 163.223);
                --color-emerald-500: oklch(.696 .17 162.48);
                --color-emerald-600: oklch(.596 .145 163.225);
                --color-emerald-700: oklch(.508 .118 165.612);
                --color-emerald-800: oklch(.432 .095 166.913);
                --color-emerald-900: oklch(.378 .077 168.94);
                --color-emerald-950: oklch(.262 .051 172.552);
                --color-teal-50: oklch(.984 .014 180.72);
                --color-teal-100: oklch(.953 .051 180.801);
                --color-teal-200: oklch(.91 .096 180.426);
                --color-teal-300: oklch(.855 .138 181.071);
                --color-teal-400: oklch(.777 .152 181.912);
                --color-teal-500: oklch(.704 .14 182.503);
                --color-teal-600: oklch(.6 .118 184.704);
                --color-teal-700: oklch(.511 .096 186.391);
                --color-teal-800: oklch(.437 .078 188.216);
                --color-teal-900: oklch(.386 .063 188.416);
                --color-teal-950: oklch(.277 .046 192.524);
                --color-cyan-50: oklch(.984 .019 200.873);
                --color-cyan-100: oklch(.956 .045 203.388);
                --color-cyan-200: oklch(.917 .08 205.041);
                --color-cyan-300: oklch(.865 .127 207.078);
                --color-cyan-400: oklch(.789 .154 211.53);
                --color-cyan-500: oklch(.715 .143 215.221);
                --color-cyan-600: oklch(.609 .126 221.723);
                --color-cyan-700: oklch(.52 .105 223.128);
                --color-cyan-800: oklch(.45 .085 224.283);
                --color-cyan-900: oklch(.398 .07 227.392);
                --color-cyan-950: oklch(.302 .056 229.695);
                --color-sky-50: oklch(.977 .013 236.62);
                --color-sky-100: oklch(.951 .026 236.824);
                --color-sky-200: oklch(.901 .058 230.902);
                --color-sky-300: oklch(.828 .111 230.318);
                --color-sky-400: oklch(.746 .16 232.661);
                --color-sky-500: oklch(.685 .169 237.323);
                --color-sky-600: oklch(.588 .158 241.966);
                --color-sky-700: oklch(.5 .134 242.749);
                --color-sky-800: oklch(.443 .11 240.79);
                --color-sky-900: oklch(.391 .09 240.876);
                --color-sky-950: oklch(.293 .066 243.157);
                --color-blue-50: oklch(.97 .014 254.604);
                --color-blue-100: oklch(.932 .032 255.585);
                --color-blue-200: oklch(.882 .059 254.128);
                --color-blue-300: oklch(.809 .105 251.813);
                --color-blue-400: oklch(.707 .165 254.624);
                --color-blue-500: oklch(.623 .214 259.815);
                --color-blue-600: oklch(.546 .245 262.881);
                --color-blue-700: oklch(.488 .243 264.376);
                --color-blue-800: oklch(.424 .199 265.638);
                --color-blue-900: oklch(.379 .146 265.522);
                --color-blue-950: oklch(.282 .091 267.935);
                --color-indigo-50: oklch(.962 .018 272.314);
                --color-indigo-100: oklch(.93 .034 272.788);
                --color-indigo-200: oklch(.87 .065 274.039);
                --color-indigo-300: oklch(.785 .115 274.713);
                --color-indigo-400: oklch(.673 .182 276.935);
                --color-indigo-500: oklch(.585 .233 277.117);
                --color-indigo-600: oklch(.511 .262 276.966);
                --color-indigo-700: oklch(.457 .24 277.023);
                --color-indigo-800: oklch(.398 .195 277.366);
                --color-indigo-900: oklch(.359 .144 278.697);
                --color-indigo-950: oklch(.257 .09 281.288);
                --color-violet-50: oklch(.969 .016 293.756);
                --color-violet-100: oklch(.943 .029 294.588);
                --color-violet-200: oklch(.894 .057 293.283);
                --color-violet-300: oklch(.811 .111 293.571);
                --color-violet-400: oklch(.702 .183 293.541);
                --color-violet-500: oklch(.606 .25 292.717);
                --color-violet-600: oklch(.541 .281 293.009);
                --color-violet-700: oklch(.491 .27 292.581);
                --color-violet-800: oklch(.432 .232 292.759);
                --color-violet-900: oklch(.38 .189 293.745);
                --color-violet-950: oklch(.283 .141 291.089);
                --color-purple-50: oklch(.977 .014 308.299);
                --color-purple-100: oklch(.946 .033 307.174);
                --color-purple-200: oklch(.902 .063 306.703);
                --color-purple-300: oklch(.827 .119 306.383);
                --color-purple-400: oklch(.714 .203 305.504);
                --color-purple-500: oklch(.627 .265 303.9);
                --color-purple-600: oklch(.558 .288 302.321);
                --color-purple-700: oklch(.496 .265 301.924);
                --color-purple-800: oklch(.438 .218 303.724);
                --color-purple-900: oklch(.381 .176 304.987);
                --color-purple-950: oklch(.291 .149 302.717);
                --color-fuchsia-50: oklch(.977 .017 320.058);
                --color-fuchsia-100: oklch(.952 .037 318.852);
                --color-fuchsia-200: oklch(.903 .076 319.62);
                --color-fuchsia-300: oklch(.833 .145 321.434);
                --color-fuchsia-400: oklch(.74 .238 322.16);
                --color-fuchsia-500: oklch(.667 .295 322.15);
                --color-fuchsia-600: oklch(.591 .293 322.896);
                --color-fuchsia-700: oklch(.518 .253 323.949);
                --color-fuchsia-800: oklch(.452 .211 324.591);
                --color-fuchsia-900: oklch(.401 .17 325.612);
                --color-fuchsia-950: oklch(.293 .136 325.661);
                --color-pink-50: oklch(.971 .014 343.198);
                --color-pink-100: oklch(.948 .028 342.258);
                --color-pink-200: oklch(.899 .061 343.231);
                --color-pink-300: oklch(.823 .12 346.018);
                --color-pink-400: oklch(.718 .202 349.761);
                --color-pink-500: oklch(.656 .241 354.308);
                --color-pink-600: oklch(.592 .249 .584);
                --color-pink-700: oklch(.525 .223 3.958);
                --color-pink-800: oklch(.459 .187 3.815);
                --color-pink-900: oklch(.408 .153 2.432);
                --color-pink-950: oklch(.284 .109 3.907);
                --color-rose-50: oklch(.969 .015 12.422);
                --color-rose-100: oklch(.941 .03 12.58);
                --color-rose-200: oklch(.892 .058 10.001);
                --color-rose-300: oklch(.81 .117 11.638);
                --color-rose-400: oklch(.712 .194 13.428);
                --color-rose-500: oklch(.645 .246 16.439);
                --color-rose-600: oklch(.586 .253 17.585);
                --color-rose-700: oklch(.514 .222 16.935);
                --color-rose-800: oklch(.455 .188 13.697);
                --color-rose-900: oklch(.41 .159 10.272);
                --color-rose-950: oklch(.271 .105 12.094);
                --color-slate-50: oklch(.984 .003 247.858);
                --color-slate-100: oklch(.968 .007 247.896);
                --color-slate-200: oklch(.929 .013 255.508);
                --color-slate-300: oklch(.869 .022 252.894);
                --color-slate-400: oklch(.704 .04 256.788);
                --color-slate-500: oklch(.554 .046 257.417);
                --color-slate-600: oklch(.446 .043 257.281);
                --color-slate-700: oklch(.372 .044 257.287);
                --color-slate-800: oklch(.279 .041 260.031);
                --color-slate-900: oklch(.208 .042 265.755);
                --color-slate-950: oklch(.129 .042 264.695);
                --color-gray-50: oklch(.985 .002 247.839);
                --color-gray-100: oklch(.967 .003 264.542);
                --color-gray-200: oklch(.928 .006 264.531);
                --color-gray-300: oklch(.872 .01 258.338);
                --color-gray-400: oklch(.707 .022 261.325);
                --color-gray-500: oklch(.551 .027 264.364);
                --color-gray-600: oklch(.446 .03 256.802);
                --color-gray-700: oklch(.373 .034 259.733);
                --color-gray-800: oklch(.278 .033 256.848);
                --color-gray-900: oklch(.21 .034 264.665);
                --color-gray-950: oklch(.13 .028 261.692);
                --color-zinc-50: oklch(.985 0 0);
                --color-zinc-100: oklch(.967 .001 286.375);
                --color-zinc-200: oklch(.92 .004 286.32);
                --color-zinc-300: oklch(.871 .006 286.286);
                --color-zinc-400: oklch(.705 .015 286.067);
                --color-zinc-500: oklch(.552 .016 285.938);
                --color-zinc-600: oklch(.442 .017 285.786);
                --color-zinc-700: oklch(.37 .013 285.805);
                --color-zinc-800: oklch(.274 .006 286.033);
                --color-zinc-900: oklch(.21 .006 285.885);
                --color-zinc-950: oklch(.141 .005 285.823);
                --color-neutral-50: oklch(.985 0 0);
                --color-neutral-100: oklch(.97 0 0);
                --color-neutral-200: oklch(.922 0 0);
                --color-neutral-300: oklch(.87 0 0);
                --color-neutral-400: oklch(.708 0 0);
                --color-neutral-500: oklch(.556 0 0);
                --color-neutral-600: oklch(.439 0 0);
                --color-neutral-700: oklch(.371 0 0);
                --color-neutral-800: oklch(.269 0 0);
                --color-neutral-900: oklch(.205 0 0);
                --color-neutral-950: oklch(.145 0 0);
                --color-stone-50: oklch(.985 .001 106.423);
                --color-stone-100: oklch(.97 .001 106.424);
                --color-stone-200: oklch(.923 .003 48.717);
                --color-stone-300: oklch(.869 .005 56.366);
                --color-stone-400: oklch(.709 .01 56.259);
                --color-stone-500: oklch(.553 .013 58.071);
                --color-stone-600: oklch(.444 .011 73.639);
                --color-stone-700: oklch(.374 .01 67.558);
                --color-stone-800: oklch(.268 .007 34.298);
                --color-stone-900: oklch(.216 .006 56.043);
                --color-stone-950: oklch(.147 .004 49.25);
                --color-black: #000;
                --color-white: #fff;
                --spacing: .25rem;
                --breakpoint-sm: 40rem;
                --breakpoint-md: 48rem;
                --breakpoint-lg: 64rem;
                --breakpoint-xl: 80rem;
                --breakpoint-2xl: 96rem;
                --container-3xs: 16rem;
                --container-2xs: 18rem;
                --container-xs: 20rem;
                --container-sm: 24rem;
                --container-md: 28rem;
                --container-lg: 32rem;
                --container-xl: 36rem;
                --container-2xl: 42rem;
                --container-3xl: 48rem;
                --container-4xl: 56rem;
                --container-5xl: 64rem;
                --container-6xl: 72rem;
                --container-7xl: 80rem;
                --text-xs: .75rem;
                --text-xs--line-height: calc(1/.75);
                --text-sm: .875rem;
                --text-sm--line-height: calc(1.25/.875);
                --text-base: 1rem;
                --text-base--line-height: 1.5;
                --text-lg: 1.125rem;
                --text-lg--line-height: calc(1.75/1.125);
                --text-xl: 1.25rem;
                --text-xl--line-height: calc(1.75/1.25);
                --text-2xl: 1.5rem;
                --text-2xl--line-height: calc(2/1.5);
                --text-3xl: 1.875rem;
                --text-3xl--line-height: 1.2;
                --text-4xl: 2.25rem;
                --text-4xl--line-height: calc(2.5/2.25);
                --text-5xl: 3rem;
                --text-5xl--line-height: 1;
                --text-6xl: 3.75rem;
                --text-6xl--line-height: 1;
                --text-7xl: 4.5rem;
                --text-7xl--line-height: 1;
                --text-8xl: 6rem;
                --text-8xl--line-height: 1;
                --text-9xl: 8rem;
                --text-9xl--line-height: 1;
                --font-weight-thin: 100;
                --font-weight-extralight: 200;
                --font-weight-light: 300;
                --font-weight-normal: 400;
                --font-weight-medium: 500;
                --font-weight-semibold: 600;
                --font-weight-bold: 700;
                --font-weight-extrabold: 800;
                --font-weight-black: 900;
                --tracking-tighter: -.05em;
                --tracking-tight: -.025em;
                --tracking-normal: 0em;
                --tracking-wide: .025em;
                --tracking-wider: .05em;
                --tracking-widest: .1em;
                --leading-tight: 1.25;
                --leading-snug: 1.375;
                --leading-normal: 1.5;
                --leading-relaxed: 1.625;
                --leading-loose: 2;
                --radius-xs: .125rem;
                --radius-sm: .25rem;
                --radius-md: .375rem;
                --radius-lg: .5rem;
                --radius-xl: .75rem;
                --radius-2xl: 1rem;
                --radius-3xl: 1.5rem;
                --radius-4xl: 2rem;
                --shadow-2xs: 0 1px #0000000d;
                --shadow-xs: 0 1px 2px 0 #0000000d;
                --shadow-sm: 0 1px 3px 0 #0000001a, 0 1px 2px -1px #0000001a;
                --shadow-md: 0 4px 6px -1px #0000001a, 0 2px 4px -2px #0000001a;
                --shadow-lg: 0 10px 15px -3px #0000001a, 0 4px 6px -4px #0000001a;
                --shadow-xl: 0 20px 25px -5px #0000001a, 0 8px 10px -6px #0000001a;
                --shadow-2xl: 0 25px 50px -12px #00000040;
                --inset-shadow-2xs: inset 0 1px #0000000d;
                --inset-shadow-xs: inset 0 1px 1px #0000000d;
                --inset-shadow-sm: inset 0 2px 4px #0000000d;
                --drop-shadow-xs: 0 1px 1px #0000000d;
                --drop-shadow-sm: 0 1px 2px #00000026;
                --drop-shadow-md: 0 3px 3px #0000001f;
                --drop-shadow-lg: 0 4px 4px #00000026;
                --drop-shadow-xl: 0 9px 7px #0000001a;
                --drop-shadow-2xl: 0 25px 25px #00000026;
                --ease-in: cubic-bezier(.4, 0, 1, 1);
                --ease-out: cubic-bezier(0, 0, .2, 1);
                --ease-in-out: cubic-bezier(.4, 0, .2, 1);
                --animate-spin: spin 1s linear infinite;
                --animate-ping: ping 1s cubic-bezier(0, 0, .2, 1)infinite;
                --animate-pulse: pulse 2s cubic-bezier(.4, 0, .6, 1)infinite;
                --animate-bounce: bounce 1s infinite;
                --blur-xs: 4px;
                --blur-sm: 8px;
                --blur-md: 12px;
                --blur-lg: 16px;
                --blur-xl: 24px;
                --blur-2xl: 40px;
                --blur-3xl: 64px;
                --perspective-dramatic: 100px;
                --perspective-near: 300px;
                --perspective-normal: 500px;
                --perspective-midrange: 800px;
                --perspective-distant: 1200px;
                --aspect-video: 16/9;
                --default-transition-duration: .15s;
                --default-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                --default-font-family: var(--font-sans);
                --default-font-feature-settings: var(--font-sans--font-feature-settings);
                --default-font-variation-settings: var(--font-sans--font-variation-settings);
                --default-mono-font-family: var(--font-mono);
                --default-mono-font-feature-settings: var(--font-mono--font-feature-settings);
                --default-mono-font-variation-settings: var(--font-mono--font-variation-settings)
            }
        }

        @layer base {

            *,
            :after,
            :before,
            ::backdrop {
                box-sizing: border-box;
                border: 0 solid;
                margin: 0;
                padding: 0
            }

            ::file-selector-button {
                box-sizing: border-box;
                border: 0 solid;
                margin: 0;
                padding: 0
            }

            html,
            :host {
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                tab-size: 4;
                line-height: 1.5;
                font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
                font-feature-settings: var(--default-font-feature-settings, normal);
                font-variation-settings: var(--default-font-variation-settings, normal);
                -webkit-tap-highlight-color: transparent
            }

            body {
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                -webkit-text-decoration: inherit;
                text-decoration: inherit
            }

            b,
            strong {
                font-weight: bolder
            }

            code,
            kbd,
            samp,
            pre {
                font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
                font-feature-settings: var(--default-mono-font-feature-settings, normal);
                font-variation-settings: var(--default-mono-font-variation-settings, normal);
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub,
            sup {
                vertical-align: baseline;
                font-size: 75%;
                line-height: 0;
                position: relative
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            :-moz-focusring {
                outline: auto
            }

            progress {
                vertical-align: baseline
            }

            summary {
                display: list-item
            }

            ol,
            ul,
            menu {
                list-style: none
            }

            img,
            svg,
            video,
            canvas,
            audio,
            iframe,
            embed,
            object {
                vertical-align: middle;
                display: block
            }

            img,
            video {
                max-width: 100%;
                height: auto
            }

            button,
            input,
            select,
            optgroup,
            textarea {
                font: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                letter-spacing: inherit;
                color: inherit;
                opacity: 1;
                background-color: #0000;
                border-radius: 0
            }

            ::file-selector-button {
                font: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                letter-spacing: inherit;
                color: inherit;
                opacity: 1;
                background-color: #0000;
                border-radius: 0
            }

            :where(select:is([multiple], [size])) optgroup {
                font-weight: bolder
            }

            :where(select:is([multiple], [size])) optgroup option {
                padding-inline-start: 20px
            }

            ::file-selector-button {
                margin-inline-end: 4px
            }

            ::placeholder {
                opacity: 1;
                color: color-mix(in oklab, currentColor 50%, transparent)
            }

            textarea {
                resize: vertical
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-date-and-time-value {
                min-height: 1lh;
                text-align: inherit
            }

            ::-webkit-datetime-edit {
                display: inline-flex
            }

            ::-webkit-datetime-edit-fields-wrapper {
                padding: 0
            }

            ::-webkit-datetime-edit {
                padding-block: 0
            }

            ::-webkit-datetime-edit-year-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-month-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-day-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-hour-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-minute-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-second-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-millisecond-field {
                padding-block: 0
            }

            ::-webkit-datetime-edit-meridiem-field {
                padding-block: 0
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            button,
            input:where([type=button], [type=reset], [type=submit]) {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button
            }

            ::file-selector-button {
                -webkit-appearance: button;
                -moz-appearance: button;
                appearance: button
            }

            ::-webkit-inner-spin-button {
                height: auto
            }

            ::-webkit-outer-spin-button {
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none !important
            }
        }

        @layer components;

        @layer utilities {
            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .static {
                position: static
            }

            .inset-0 {
                inset: calc(var(--spacing)*0)
            }

            .-mt-\[4\.9rem\] {
                margin-top: -4.9rem
            }

            .-mb-px {
                margin-bottom: -1px
            }

            .mb-1 {
                margin-bottom: calc(var(--spacing)*1)
            }

            .mb-2 {
                margin-bottom: calc(var(--spacing)*2)
            }

            .mb-4 {
                margin-bottom: calc(var(--spacing)*4)
            }

            .mb-6 {
                margin-bottom: calc(var(--spacing)*6)
            }

            .-ml-8 {
                margin-left: calc(var(--spacing)*-8)
            }

            .flex {
                display: flex
            }

            .hidden {
                display: none
            }

            .inline-block {
                display: inline-block
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .aspect-\[335\/376\] {
                aspect-ratio: 335/376
            }

            .h-1 {
                height: calc(var(--spacing)*1)
            }

            .h-1\.5 {
                height: calc(var(--spacing)*1.5)
            }

            .h-2 {
                height: calc(var(--spacing)*2)
            }

            .h-2\.5 {
                height: calc(var(--spacing)*2.5)
            }

            .h-3 {
                height: calc(var(--spacing)*3)
            }

            .h-3\.5 {
                height: calc(var(--spacing)*3.5)
            }

            .h-14 {
                height: calc(var(--spacing)*14)
            }

            .h-14\.5 {
                height: calc(var(--spacing)*14.5)
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-1 {
                width: calc(var(--spacing)*1)
            }

            .w-1\.5 {
                width: calc(var(--spacing)*1.5)
            }

            .w-2 {
                width: calc(var(--spacing)*2)
            }

            .w-2\.5 {
                width: calc(var(--spacing)*2.5)
            }

            .w-3 {
                width: calc(var(--spacing)*3)
            }

            .w-3\.5 {
                width: calc(var(--spacing)*3.5)
            }

            .w-\[448px\] {
                width: 448px
            }

            .w-full {
                width: 100%
            }

            .max-w-\[335px\] {
                max-width: 335px
            }

            .max-w-none {
                max-width: none
            }

            .flex-1 {
                flex: 1
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .translate-y-0 {
                --tw-translate-y: calc(var(--spacing)*0);
                translate: var(--tw-translate-x)var(--tw-translate-y)
            }

            .transform {
                transform: var(--tw-rotate-x)var(--tw-rotate-y)var(--tw-rotate-z)var(--tw-skew-x)var(--tw-skew-y)
            }

            .flex-col {
                flex-direction: column
            }

            .flex-col-reverse {
                flex-direction: column-reverse
            }

            .items-center {
                align-items: center
            }

            .justify-center {
                justify-content: center
            }

            .justify-end {
                justify-content: flex-end
            }

            .gap-3 {
                gap: calc(var(--spacing)*3)
            }

            .gap-4 {
                gap: calc(var(--spacing)*4)
            }

            :where(.space-x-1>:not(:last-child)) {
                --tw-space-x-reverse: 0;
                margin-inline-start: calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));
                margin-inline-end: calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-full {
                border-radius: 3.40282e38px
            }

            .rounded-sm {
                border-radius: var(--radius-sm)
            }

            .rounded-t-lg {
                border-top-left-radius: var(--radius-lg);
                border-top-right-radius: var(--radius-lg)
            }

            .rounded-br-lg {
                border-bottom-right-radius: var(--radius-lg)
            }

            .rounded-bl-lg {
                border-bottom-left-radius: var(--radius-lg)
            }

            .border {
                border-style: var(--tw-border-style);
                border-width: 1px
            }

            .border-\[\#19140035\] {
                border-color: #19140035
            }

            .border-\[\#e3e3e0\] {
                border-color: #e3e3e0
            }

            .border-black {
                border-color: var(--color-black)
            }

            .border-transparent {
                border-color: #0000
            }

            .bg-\[\#1b1b18\] {
                background-color: #1b1b18
            }

            .bg-\[\#FDFDFC\] {
                background-color: #fdfdfc
            }

            .bg-\[\#dbdbd7\] {
                background-color: #dbdbd7
            }

            .bg-\[\#fff2f2\] {
                background-color: #fff2f2
            }

            .bg-white {
                background-color: var(--color-white)
            }

            .p-6 {
                padding: calc(var(--spacing)*6)
            }

            .px-5 {
                padding-inline: calc(var(--spacing)*5)
            }

            .py-1 {
                padding-block: calc(var(--spacing)*1)
            }

            .py-1\.5 {
                padding-block: calc(var(--spacing)*1.5)
            }

            .py-2 {
                padding-block: calc(var(--spacing)*2)
            }

            .pb-12 {
                padding-bottom: calc(var(--spacing)*12)
            }

            .text-sm {
                font-size: var(--text-sm);
                line-height: var(--tw-leading, var(--text-sm--line-height))
            }

            .text-\[13px\] {
                font-size: 13px
            }

            .leading-\[20px\] {
                --tw-leading: 20px;
                line-height: 20px
            }

            .leading-normal {
                --tw-leading: var(--leading-normal);
                line-height: var(--leading-normal)
            }

            .font-medium {
                --tw-font-weight: var(--font-weight-medium);
                font-weight: var(--font-weight-medium)
            }

            .text-\[\#1b1b18\] {
                color: #1b1b18
            }

            .text-\[\#706f6c\] {
                color: #706f6c
            }

            .text-\[\#F53003\],
            .text-\[\#f53003\] {
                color: #f53003
            }

            .text-white {
                color: var(--color-white)
            }

            .underline {
                text-decoration-line: underline
            }

            .underline-offset-4 {
                text-underline-offset: 4px
            }

            .opacity-100 {
                opacity: 1
            }

            .shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-shadow: 0px 0px 1px 0px var(--tw-shadow-color, #00000008), 0px 1px 2px 0px var(--tw-shadow-color, #0000000f);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\] {
                --tw-shadow: inset 0px 0px 0px 1px var(--tw-shadow-color, #1a1a0029);
                box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
            }

            .\!filter {
                filter: var(--tw-blur, )var(--tw-brightness, )var(--tw-contrast, )var(--tw-grayscale, )var(--tw-hue-rotate, )var(--tw-invert, )var(--tw-saturate, )var(--tw-sepia, )var(--tw-drop-shadow, ) !important
            }

            .filter {
                filter: var(--tw-blur, )var(--tw-brightness, )var(--tw-contrast, )var(--tw-grayscale, )var(--tw-hue-rotate, )var(--tw-invert, )var(--tw-saturate, )var(--tw-sepia, )var(--tw-drop-shadow, )
            }

            .transition-all {
                transition-property: all;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .transition-opacity {
                transition-property: opacity;
                transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
                transition-duration: var(--tw-duration, var(--default-transition-duration))
            }

            .delay-300 {
                transition-delay: .3s
            }

            .duration-750 {
                --tw-duration: .75s;
                transition-duration: .75s
            }

            .not-has-\[nav\]\:hidden:not(:has(:is(nav))) {
                display: none
            }

            .before\:absolute:before {
                content: var(--tw-content);
                position: absolute
            }

            .before\:top-0:before {
                content: var(--tw-content);
                top: calc(var(--spacing)*0)
            }

            .before\:top-1\/2:before {
                content: var(--tw-content);
                top: 50%
            }

            .before\:bottom-0:before {
                content: var(--tw-content);
                bottom: calc(var(--spacing)*0)
            }

            .before\:bottom-1\/2:before {
                content: var(--tw-content);
                bottom: 50%
            }

            .before\:left-\[0\.4rem\]:before {
                content: var(--tw-content);
                left: .4rem
            }

            .before\:border-l:before {
                content: var(--tw-content);
                border-left-style: var(--tw-border-style);
                border-left-width: 1px
            }

            .before\:border-\[\#e3e3e0\]:before {
                content: var(--tw-content);
                border-color: #e3e3e0
            }

            @media (hover:hover) {
                .hover\:border-\[\#1915014a\]:hover {
                    border-color: #1915014a
                }

                .hover\:border-\[\#19140035\]:hover {
                    border-color: #19140035
                }

                .hover\:border-black:hover {
                    border-color: var(--color-black)
                }

                .hover\:bg-black:hover {
                    background-color: var(--color-black)
                }
            }

            @media (width>=64rem) {
                .lg\:-mt-\[6\.6rem\] {
                    margin-top: -6.6rem
                }

                .lg\:mb-0 {
                    margin-bottom: calc(var(--spacing)*0)
                }

                .lg\:mb-6 {
                    margin-bottom: calc(var(--spacing)*6)
                }

                .lg\:-ml-px {
                    margin-left: -1px
                }

                .lg\:ml-0 {
                    margin-left: calc(var(--spacing)*0)
                }

                .lg\:block {
                    display: block
                }

                .lg\:aspect-auto {
                    aspect-ratio: auto
                }

                .lg\:w-\[438px\] {
                    width: 438px
                }

                .lg\:max-w-4xl {
                    max-width: var(--container-4xl)
                }

                .lg\:grow {
                    flex-grow: 1
                }

                .lg\:flex-row {
                    flex-direction: row
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:rounded-t-none {
                    border-top-left-radius: 0;
                    border-top-right-radius: 0
                }

                .lg\:rounded-tl-lg {
                    border-top-left-radius: var(--radius-lg)
                }

                .lg\:rounded-r-lg {
                    border-top-right-radius: var(--radius-lg);
                    border-bottom-right-radius: var(--radius-lg)
                }

                .lg\:rounded-br-none {
                    border-bottom-right-radius: 0
                }

                .lg\:p-8 {
                    padding: calc(var(--spacing)*8)
                }

                .lg\:p-20 {
                    padding: calc(var(--spacing)*20)
                }
            }

            @media (prefers-color-scheme:dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-\[\#3E3E3A\] {
                    border-color: #3e3e3a
                }

                .dark\:border-\[\#eeeeec\] {
                    border-color: #eeeeec
                }

                .dark\:bg-\[\#0a0a0a\] {
                    background-color: #0a0a0a
                }

                .dark\:bg-\[\#1D0002\] {
                    background-color: #1d0002
                }

                .dark\:bg-\[\#3E3E3A\] {
                    background-color: #3e3e3a
                }

                .dark\:bg-\[\#161615\] {
                    background-color: #161615
                }

                .dark\:bg-\[\#eeeeec\] {
                    background-color: #eeeeec
                }

                .dark\:text-\[\#1C1C1A\] {
                    color: #1c1c1a
                }

                .dark\:text-\[\#A1A09A\] {
                    color: #a1a09a
                }

                .dark\:text-\[\#EDEDEC\] {
                    color: #ededec
                }

                .dark\:text-\[\#F61500\] {
                    color: #f61500
                }

                .dark\:text-\[\#FF4433\] {
                    color: #f43
                }

                .dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\] {
                    --tw-shadow: inset 0px 0px 0px 1px var(--tw-shadow-color, #fffaed2d);
                    box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
                }

                .dark\:before\:border-\[\#3E3E3A\]:before {
                    content: var(--tw-content);
                    border-color: #3e3e3a
                }

                @media (hover:hover) {
                    .dark\:hover\:border-\[\#3E3E3A\]:hover {
                        border-color: #3e3e3a
                    }

                    .dark\:hover\:border-\[\#62605b\]:hover {
                        border-color: #62605b
                    }

                    .dark\:hover\:border-white:hover {
                        border-color: var(--color-white)
                    }

                    .dark\:hover\:bg-white:hover {
                        background-color: var(--color-white)
                    }
                }
            }

            @starting-style {
                .starting\:translate-y-4 {
                    --tw-translate-y: calc(var(--spacing)*4);
                    translate: var(--tw-translate-x)var(--tw-translate-y)
                }
            }

            @starting-style {
                .starting\:translate-y-6 {
                    --tw-translate-y: calc(var(--spacing)*6);
                    translate: var(--tw-translate-x)var(--tw-translate-y)
                }
            }

            @starting-style {
                .starting\:opacity-0 {
                    opacity: 0
                }
            }
        }

        @keyframes spin {
            to {
                transform: rotate(360deg)
            }
        }

        @keyframes ping {

            75%,
            to {
                opacity: 0;
                transform: scale(2)
            }
        }

        @keyframes pulse {
            50% {
                opacity: .5
            }
        }

        @keyframes bounce {

            0%,
            to {
                animation-timing-function: cubic-bezier(.8, 0, 1, 1);
                transform: translateY(-25%)
            }

            50% {
                animation-timing-function: cubic-bezier(0, 0, .2, 1);
                transform: none
            }
        }

        @property --tw-translate-x {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-translate-y {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-translate-z {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-rotate-x {
            syntax: "*";
            inherits: false;
            initial-value: rotateX(0)
        }

        @property --tw-rotate-y {
            syntax: "*";
            inherits: false;
            initial-value: rotateY(0)
        }

        @property --tw-rotate-z {
            syntax: "*";
            inherits: false;
            initial-value: rotateZ(0)
        }

        @property --tw-skew-x {
            syntax: "*";
            inherits: false;
            initial-value: skewX(0)
        }

        @property --tw-skew-y {
            syntax: "*";
            inherits: false;
            initial-value: skewY(0)
        }

        @property --tw-space-x-reverse {
            syntax: "*";
            inherits: false;
            initial-value: 0
        }

        @property --tw-border-style {
            syntax: "*";
            inherits: false;
            initial-value: solid
        }

        @property --tw-leading {
            syntax: "*";
            inherits: false
        }

        @property --tw-font-weight {
            syntax: "*";
            inherits: false
        }

        @property --tw-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-shadow-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-inset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-inset-shadow-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-ring-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-inset-ring-color {
            syntax: "*";
            inherits: false
        }

        @property --tw-inset-ring-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-ring-inset {
            syntax: "*";
            inherits: false
        }

        @property --tw-ring-offset-width {
            syntax: "<length>";
            inherits: false;
            initial-value: 0
        }

        @property --tw-ring-offset-color {
            syntax: "*";
            inherits: false;
            initial-value: #fff
        }

        @property --tw-ring-offset-shadow {
            syntax: "*";
            inherits: false;
            initial-value: 0 0 #0000
        }

        @property --tw-blur {
            syntax: "*";
            inherits: false
        }

        @property --tw-brightness {
            syntax: "*";
            inherits: false
        }

        @property --tw-contrast {
            syntax: "*";
            inherits: false
        }

        @property --tw-grayscale {
            syntax: "*";
            inherits: false
        }

        @property --tw-hue-rotate {
            syntax: "*";
            inherits: false
        }

        @property --tw-invert {
            syntax: "*";
            inherits: false
        }

        @property --tw-opacity {
            syntax: "*";
            inherits: false
        }

        @property --tw-saturate {
            syntax: "*";
            inherits: false
        }

        @property --tw-sepia {
            syntax: "*";
            inherits: false
        }

        @property --tw-drop-shadow {
            syntax: "*";
            inherits: false
        }

        @property --tw-duration {
            syntax: "*";
            inherits: false
        }

        @property --tw-content {
            syntax: "*";
            inherits: false;
            initial-value: ""
        }
    </style>
    @endif
</head>

<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
            <a
                href="{{ url('/home') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Dashboard
            </a>
            @else
            <a
                href="{{ route('login') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
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
            <div class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-bl-lg rounded-br-lg lg:rounded-tl-lg lg:rounded-br-none">
                <h1 class="mb-1 font-medium">Sistema de administración de usuarios</h1>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Proyecto construido en Laravel 12, contiene:</p>
                <ul class="flex flex-col mb-4 lg:mb-6">
                    <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
                        <span class="relative py-1 bg-white dark:bg-[#161615]">
                            <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                            </span>
                        </span>
                        <span>
                            CRUD usuarios con gestión de roles
                            <!--<svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >-->
                            <path
                                d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                stroke="currentColor"
                                stroke-linecap="square" />
                            </svg>
                        </span>
                    </li>
                    <li class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:left-[0.4rem] before:absolute">
                        <span class="relative py-1 bg-white dark:bg-[#161615]">
                            <span class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
                                <span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
                            </span>
                        </span>
                        <span>
                            Búsquedas, estados y validaciones
                            <!--<svg
                                        width="10"
                                        height="11"
                                        viewBox="0 0 10 11"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="w-2.5 h-2.5"
                                    >-->
                            <path
                                d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001"
                                stroke="currentColor"
                                stroke-linecap="square" />
                            </svg>
                        </span>
                    </li>
                </ul>
                <p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]"><strong>Autor: </strong>Ing. Andy Castillo Palma.</p>
                <ul class="flex gap-3 text-sm leading-normal">
                    <li>
                        <a href="https://www.facebook.com/andylenincp" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                                <path fill="#039be5" d="M24 5A19 19 0 1 0 24 43A19 19 0 1 0 24 5Z"></path>
                                <path fill="#fff" d="M26.572,29.036h4.917l0.772-4.995h-5.69v-2.73c0-2.075,0.678-3.915,2.619-3.915h3.119v-4.359c-0.548-0.074-1.707-0.236-3.897-0.236c-4.573,0-7.254,2.415-7.254,7.917v3.323h-4.701v4.995h4.701v13.729C22.089,42.905,23.032,43,24,43c0.875,0,1.729-0.08,2.572-0.194V29.036z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/andylenincp" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                                <path fill="#304ffe" d="M41.67,13.48c-0.4,0.26-0.97,0.5-1.21,0.77c-0.09,0.09-0.14,0.19-0.12,0.29v1.03l-0.3,1.01l-0.3,1l-0.33,1.1 l-0.68,2.25l-0.66,2.22l-0.5,1.67c0,0.26-0.01,0.52-0.03,0.77c-0.07,0.96-0.27,1.88-0.59,2.74c-0.19,0.53-0.42,1.04-0.7,1.52 c-0.1,0.19-0.22,0.38-0.34,0.56c-0.4,0.63-0.88,1.21-1.41,1.72c-0.41,0.41-0.86,0.79-1.35,1.11c0,0,0,0-0.01,0 c-0.08,0.07-0.17,0.13-0.27,0.18c-0.31,0.21-0.64,0.39-0.98,0.55c-0.23,0.12-0.46,0.22-0.7,0.31c-0.05,0.03-0.11,0.05-0.16,0.07 c-0.57,0.27-1.23,0.45-1.89,0.54c-0.04,0.01-0.07,0.01-0.11,0.02c-0.4,0.07-0.79,0.13-1.19,0.16c-0.18,0.02-0.37,0.03-0.55,0.03 l-0.71-0.04l-3.42-0.18c0-0.01-0.01,0-0.01,0l-1.72-0.09c-0.13,0-0.27,0-0.4-0.01c-0.54-0.02-1.06-0.08-1.58-0.19 c-0.01,0-0.01,0-0.01,0c-0.95-0.18-1.86-0.5-2.71-0.93c-0.47-0.24-0.93-0.51-1.36-0.82c-0.18-0.13-0.35-0.27-0.52-0.42 c-0.48-0.4-0.91-0.83-1.31-1.27c-0.06-0.06-0.11-0.12-0.16-0.18c-0.06-0.06-0.12-0.13-0.17-0.19c-0.38-0.48-0.7-0.97-0.96-1.49 c-0.24-0.46-0.43-0.95-0.58-1.49c-0.06-0.19-0.11-0.37-0.15-0.57c-0.01-0.01-0.02-0.03-0.02-0.05c-0.1-0.41-0.19-0.84-0.24-1.27 c-0.06-0.33-0.09-0.66-0.09-1c-0.02-0.13-0.02-0.27-0.02-0.4l1.91-2.95l1.87-2.88l0.85-1.31l0.77-1.18l0.26-0.41v-1.03 c0.02-0.23,0.03-0.47,0.02-0.69c-0.01-0.7-0.15-1.38-0.38-2.03c-0.22-0.69-0.53-1.34-0.85-1.94c-0.38-0.69-0.78-1.31-1.11-1.87 C14,7.4,13.66,6.73,13.75,6.26C14.47,6.09,15.23,6,16,6h16c4.18,0,7.78,2.6,9.27,6.26C41.43,12.65,41.57,13.06,41.67,13.48z"></path>
                                <path fill="#4928f4" d="M42,16v0.27l-1.38,0.8l-0.88,0.51l-0.97,0.56l-1.94,1.13l-1.9,1.1l-1.94,1.12l-0.77,0.45 c0,0.48-0.12,0.92-0.34,1.32c-0.31,0.58-0.83,1.06-1.49,1.47c-0.67,0.41-1.49,0.74-2.41,0.98c0,0,0-0.01-0.01,0 c-3.56,0.92-8.42,0.5-10.78-1.26c-0.66-0.49-1.12-1.09-1.32-1.78c-0.06-0.23-0.09-0.48-0.09-0.73v-7.19 c0.01-0.15-0.09-0.3-0.27-0.45c-0.54-0.43-1.81-0.84-3.23-1.25c-1.11-0.31-2.3-0.62-3.3-0.92c-0.79-0.24-1.46-0.48-1.86-0.71 c0.18-0.35,0.39-0.7,0.61-1.03c1.4-2.05,3.54-3.56,6.02-4.13C14.47,6.09,15.23,6,16,6h10.8c5.37,0.94,10.32,3.13,14.47,6.26 c0.16,0.39,0.3,0.8,0.4,1.22c0.18,0.66,0.29,1.34,0.32,2.05C42,15.68,42,15.84,42,16z"></path>
                                <path fill="#6200ea" d="M42,16v4.41l-0.22,0.68l-0.75,2.33l-0.78,2.4l-0.41,1.28l-0.38,1.19l-0.37,1.13l-0.36,1.12l-0.19,0.59 l-0.25,0.78c0,0.76-0.02,1.43-0.07,2c-0.01,0.06-0.02,0.12-0.02,0.18c-0.06,0.53-0.14,0.98-0.27,1.36 c-0.01,0.06-0.03,0.12-0.05,0.17c-0.26,0.72-0.65,1.18-1.23,1.48c-0.14,0.08-0.3,0.14-0.47,0.2c-0.53,0.18-1.2,0.27-2.02,0.32 c-0.6,0.04-1.29,0.05-2.07,0.05H31.4l-1.19-0.05L30,37.61l-2.17-0.09l-2.2-0.09l-7.25-0.3l-1.88-0.08h-0.26 c-0.78-0.01-1.45-0.06-2.03-0.14c-0.84-0.13-1.49-0.35-1.98-0.68c-0.7-0.45-1.11-1.11-1.35-2.03c-0.06-0.22-0.11-0.45-0.14-0.7 c-0.1-0.58-0.15-1.25-0.18-2c0-0.15,0-0.3-0.01-0.46c-0.01-0.01,0-0.01,0-0.01v-0.58c-0.01-0.29-0.01-0.59-0.01-0.9l0.05-1.61 l0.03-1.15l0.04-1.34v-0.19l0.07-2.46l0.07-2.46l0.07-2.31l0.06-2.27l0.02-0.6c0-0.31-1.05-0.49-2.22-0.64 c-0.93-0.12-1.95-0.23-2.56-0.37c0.05-0.23,0.1-0.46,0.16-0.68c0.18-0.72,0.45-1.4,0.79-2.05c0.18-0.35,0.39-0.7,0.61-1.03 c2.16-0.95,4.41-1.69,6.76-2.17c2.06-0.43,4.21-0.66,6.43-0.66c7.36,0,14.16,2.49,19.54,6.69c0.52,0.4,1.03,0.83,1.53,1.28 C42,15.68,42,15.84,42,16z"></path>
                                <path fill="#673ab7" d="M42,18.37v4.54l-0.55,1.06l-1.05,2.05l-0.56,1.08l-0.51,0.99l-0.22,0.43c0,0.31,0,0.61-0.02,0.9 c0,0.43-0.02,0.84-0.05,1.22c-0.04,0.45-0.1,0.86-0.16,1.24c-0.15,0.79-0.36,1.47-0.66,2.03c-0.04,0.07-0.08,0.14-0.12,0.2 c-0.11,0.18-0.24,0.35-0.38,0.51c-0.18,0.22-0.38,0.41-0.61,0.57c-0.34,0.26-0.74,0.47-1.2,0.63c-0.57,0.21-1.23,0.35-2.01,0.43 c-0.51,0.05-1.07,0.08-1.68,0.08l-0.42,0.02l-2.08,0.12h-0.01L27.5,36.6l-2.25,0.13l-3.1,0.18l-3.77,0.22l-0.55,0.03 c-0.51,0-0.99-0.03-1.45-0.09c-0.05-0.01-0.09-0.02-0.14-0.02c-0.68-0.11-1.3-0.29-1.86-0.54c-0.68-0.3-1.27-0.7-1.77-1.18 c-0.44-0.43-0.82-0.92-1.13-1.47c-0.07-0.13-0.14-0.25-0.2-0.39c-0.3-0.59-0.54-1.25-0.72-1.97c-0.03-0.12-0.06-0.25-0.08-0.38 c-0.06-0.23-0.11-0.47-0.14-0.72c-0.11-0.64-0.17-1.32-0.2-2.03v-0.01c-0.01-0.29-0.02-0.57-0.02-0.87l-0.49-1.17l-0.07-0.18 L9.5,25.99L8.75,24.2l-0.12-0.29l-0.72-1.73l-0.8-1.93c0,0,0,0-0.01,0L6.29,18.3L6,17.59V16c0-0.63,0.06-1.25,0.17-1.85 c0.05-0.23,0.1-0.46,0.16-0.68c0.85-0.49,1.74-0.94,2.65-1.34c2.08-0.93,4.31-1.62,6.62-2.04c1.72-0.31,3.51-0.48,5.32-0.48 c7.31,0,13.94,2.65,19.12,6.97c0.2,0.16,0.39,0.32,0.58,0.49C41.09,17.48,41.55,17.91,42,18.37z"></path>
                                <path fill="#8e24aa" d="M42,21.35v5.14l-0.57,1.19l-1.08,2.25l-0.01,0.03c0,0.43-0.02,0.82-0.05,1.17c-0.1,1.15-0.38,1.88-0.84,2.33 c-0.33,0.34-0.74,0.53-1.25,0.63c-0.03,0.01-0.07,0.01-0.1,0.02c-0.16,0.03-0.33,0.05-0.51,0.05c-0.62,0.06-1.35,0.02-2.19-0.04 c-0.09,0-0.19-0.01-0.29-0.02c-0.61-0.04-1.26-0.08-1.98-0.11c-0.39-0.01-0.8-0.02-1.22-0.02h-0.02l-1.01,0.08h-0.01l-2.27,0.16 l-2.59,0.2l-0.38,0.03l-3.03,0.22l-1.57,0.12l-1.55,0.11c-0.27,0-0.53,0-0.79-0.01c0,0-0.01-0.01-0.01,0 c-1.13-0.02-2.14-0.09-3.04-0.26c-0.83-0.14-1.56-0.36-2.18-0.69c-0.64-0.31-1.17-0.75-1.6-1.31c-0.41-0.55-0.71-1.24-0.9-2.07 c0-0.01,0-0.01,0-0.01c-0.14-0.67-0.22-1.45-0.22-2.33l-0.15-0.27L9.7,26.35l-0.13-0.22L9.5,25.99l-0.93-1.65l-0.46-0.83 l-0.58-1.03l-1-1.79L6,19.75v-3.68c0.88-0.58,1.79-1.09,2.73-1.55c1.14-0.58,2.32-1.07,3.55-1.47c1.34-0.44,2.74-0.79,4.17-1.02 c1.45-0.24,2.94-0.36,4.47-0.36c6.8,0,13.04,2.43,17.85,6.47c0.22,0.17,0.43,0.36,0.64,0.54c0.84,0.75,1.64,1.56,2.37,2.41 C41.86,21.18,41.94,21.26,42,21.35z"></path>
                                <path fill="#c2185b" d="M42,24.71v7.23c-0.24-0.14-0.57-0.31-0.98-0.49c-0.22-0.11-0.47-0.22-0.73-0.32 c-0.38-0.17-0.79-0.33-1.25-0.49c-0.1-0.04-0.2-0.07-0.31-0.1c-0.18-0.07-0.37-0.13-0.56-0.19c-0.59-0.18-1.24-0.35-1.92-0.5 c-0.26-0.05-0.53-0.1-0.8-0.14c-0.87-0.15-1.8-0.24-2.77-0.25c-0.08-0.01-0.17-0.01-0.25-0.01l-2.57,0.02l-3.5,0.02h-0.01 l-7.49,0.06c-2.38,0-3.84,0.57-4.72,0.8c0,0-0.01,0-0.01,0.01c-0.93,0.24-1.22,0.09-1.3-1.54c-0.02-0.45-0.03-1.03-0.03-1.74 l-0.56-0.43l-0.98-0.74l-0.6-0.46l-0.12-0.09L8.88,24.1l-0.25-0.19l-0.52-0.4l-0.96-0.72L6,21.91v-3.4 c0.1-0.08,0.19-0.15,0.29-0.21c1.45-1,3-1.85,4.64-2.54c1.46-0.62,3-1.11,4.58-1.46c0.43-0.09,0.87-0.18,1.32-0.24 c1.33-0.23,2.7-0.34,4.09-0.34c6.01,0,11.53,2.09,15.91,5.55c0.66,0.52,1.3,1.07,1.9,1.66c0.82,0.78,1.59,1.61,2.3,2.49 c0.14,0.18,0.28,0.36,0.42,0.55C41.64,24.21,41.82,24.46,42,24.71z"></path>
                                <path fill="#d81b60" d="M42,28.72V32c0,0.65-0.06,1.29-0.18,1.91c-0.18,0.92-0.49,1.8-0.91,2.62c-0.22,0.05-0.47,0.05-0.75,0.01 c-0.63-0.11-1.37-0.44-2.17-0.87c-0.04-0.01-0.08-0.03-0.11-0.05c-0.25-0.13-0.51-0.27-0.77-0.43c-0.53-0.29-1.09-0.61-1.65-0.91 c-0.12-0.06-0.24-0.12-0.35-0.18c-0.64-0.33-1.3-0.63-1.96-0.86c0,0,0,0-0.01,0c-0.14-0.05-0.29-0.1-0.44-0.14 c-0.57-0.16-1.15-0.26-1.71-0.26l-1.1-0.32l-4.87-1.41c0,0,0,0-0.01,0l-2.99-0.87h-0.01l-1.3-0.38c-3.76,0-6.07,1.6-7.19,0.99 c-0.44-0.23-0.7-0.81-0.79-1.95c-0.03-0.32-0.04-0.68-0.04-1.1l-1.17-0.57l-0.05-0.02h-0.01l-0.84-0.42L9.7,26.35l-0.07-0.03 l-0.17-0.09L7.5,25.28L6,24.55v-3.43c0.17-0.15,0.35-0.29,0.53-0.43c0.19-0.15,0.38-0.29,0.57-0.44c0.01,0,0.01,0,0.01,0 c1.18-0.85,2.43-1.6,3.76-2.22c1.55-0.74,3.2-1.31,4.91-1.68c0.25-0.06,0.51-0.12,0.77-0.16c1.42-0.27,2.88-0.41,4.37-0.41 c5.27,0,10.11,1.71,14.01,4.59c1.13,0.84,2.18,1.77,3.14,2.78c0.79,0.83,1.52,1.73,2.18,2.67c0.05,0.07,0.1,0.14,0.15,0.2 c0.37,0.54,0.71,1.09,1.03,1.66C41.64,28.02,41.82,28.37,42,28.72z"></path>
                                <path fill="#f50057" d="M41.82,33.91c-0.18,0.92-0.49,1.8-0.91,2.62c-0.19,0.37-0.4,0.72-0.63,1.06c-0.14,0.21-0.29,0.41-0.44,0.6 c-0.36-0.14-0.89-0.34-1.54-0.56c0,0,0,0,0-0.01c-0.49-0.17-1.05-0.35-1.65-0.52c-0.17-0.05-0.34-0.1-0.52-0.15 c-0.71-0.19-1.45-0.36-2.17-0.46c-0.6-0.1-1.19-0.16-1.74-0.16l-0.46-0.13h-0.01l-2.42-0.7l-1.49-0.43l-1.66-0.48h-0.01l-0.54-0.15 l-6.53-1.88l-1.88-0.54l-1.4-0.33l-2.28-0.54l-0.28-0.07c0,0,0,0-0.01,0l-2.29-0.53c0-0.01,0-0.01,0-0.01l-0.41-0.09l-0.21-0.05 l-1.67-0.39l-0.19-0.05l-1.42-1.17L6,27.9v-4.08c0.37-0.36,0.75-0.7,1.15-1.03c0.12-0.11,0.25-0.21,0.38-0.31 c0.12-0.1,0.25-0.2,0.38-0.3c0.91-0.69,1.87-1.31,2.89-1.84c1.3-0.7,2.68-1.26,4.13-1.66c0.28-0.09,0.56-0.17,0.85-0.23 c1.64-0.41,3.36-0.62,5.14-0.62c4.47,0,8.63,1.35,12.07,3.66c1.71,1.15,3.25,2.53,4.55,4.1c0.66,0.79,1.26,1.62,1.79,2.5 c0.05,0.07,0.09,0.13,0.13,0.2c0.32,0.53,0.62,1.08,0.89,1.64c0.25,0.5,0.47,1,0.67,1.52C41.34,32.25,41.6,33.07,41.82,33.91z"></path>
                                <path fill="#ff1744" d="M40.28,37.59c-0.14,0.21-0.29,0.41-0.44,0.6c-0.44,0.55-0.92,1.05-1.46,1.49c-0.47,0.39-0.97,0.74-1.5,1.04 c-0.2-0.05-0.4-0.11-0.61-0.19c-0.66-0.23-1.35-0.61-1.99-1.01c-0.96-0.61-1.79-1.27-2.16-1.57c-0.14-0.12-0.21-0.18-0.21-0.18 l-1.7-0.15L30,37.6l-2.2-0.19l-2.28-0.2l-3.37-0.3l-5.34-0.47l-0.02-0.01l-1.88-0.91l-1.9-0.92l-1.53-0.74l-0.33-0.16l-0.41-0.2 l-1.42-0.69L7.43,31.9l-0.59-0.29L6,31.35v-4.47c0.47-0.56,0.97-1.09,1.5-1.6c0.34-0.32,0.7-0.64,1.07-0.94 c0.06-0.05,0.12-0.1,0.18-0.14c0.04-0.05,0.09-0.08,0.13-0.1c0.59-0.48,1.21-0.91,1.85-1.3c0.74-0.47,1.52-0.89,2.33-1.24 c0.87-0.39,1.78-0.72,2.72-0.97c1.63-0.46,3.36-0.7,5.14-0.7c4.08,0,7.85,1.24,10.96,3.37c1.99,1.36,3.71,3.08,5.07,5.07 c0.45,0.64,0.85,1.32,1.22,2.02c0.13,0.26,0.26,0.52,0.37,0.78c0.12,0.25,0.23,0.5,0.34,0.75c0.21,0.52,0.4,1.04,0.57,1.58 c0.32,1,0.56,2.02,0.71,3.08C40.21,36.89,40.25,37.24,40.28,37.59z"></path>
                                <path fill="#ff5722" d="M38.39,39.42c0,0.08,0,0.17-0.01,0.26c-0.47,0.39-0.97,0.74-1.5,1.04c-0.22,0.12-0.44,0.24-0.67,0.34 c-0.23,0.11-0.46,0.21-0.7,0.3c-0.34-0.18-0.8-0.4-1.29-0.61c-0.69-0.31-1.44-0.59-2.02-0.68c-0.14-0.03-0.27-0.04-0.39-0.04 l-1.64-0.21h-0.02l-2.04-0.27l-2.06-0.27l-0.96-0.12l-7.56-0.98c-0.49,0-1.01-0.03-1.55-0.1c-0.66-0.06-1.35-0.16-2.04-0.3 c-0.68-0.12-1.37-0.28-2.03-0.45c-0.69-0.16-1.37-0.35-2-0.53c-0.73-0.22-1.41-0.43-1.98-0.62c-0.47-0.15-0.87-0.29-1.18-0.4 c-0.18-0.43-0.33-0.88-0.44-1.34C6.1,33.66,6,32.84,6,32v-1.67c0.32-0.53,0.67-1.05,1.06-1.54c0.71-0.94,1.52-1.8,2.4-2.56 c0.03-0.04,0.07-0.07,0.1-0.09l0.01-0.01c0.31-0.28,0.63-0.53,0.97-0.77c0.04-0.04,0.08-0.07,0.12-0.1 c0.16-0.12,0.33-0.24,0.51-0.35c1.43-0.97,3.01-1.73,4.7-2.24c1.6-0.48,3.29-0.73,5.05-0.73c3.49,0,6.75,1.03,9.47,2.79 c2.01,1.29,3.74,2.99,5.06,4.98c0.16,0.23,0.31,0.46,0.46,0.7c0.69,1.17,1.26,2.43,1.68,3.75c0.05,0.15,0.09,0.3,0.13,0.46 c0.08,0.27,0.15,0.55,0.21,0.83c0.02,0.07,0.04,0.14,0.06,0.22c0.14,0.63,0.24,1.29,0.31,1.95c0,0.01,0,0.01,0,0.01 C38.36,38.22,38.39,38.82,38.39,39.42z"></path>
                                <path fill="#ff6f00" d="M36.33,39.42c0,0.35-0.02,0.73-0.06,1.11c-0.02,0.18-0.04,0.36-0.06,0.53c-0.23,0.11-0.46,0.21-0.7,0.3 c-0.45,0.17-0.91,0.31-1.38,0.41c-0.32,0.07-0.65,0.13-0.98,0.16h-0.01c-0.31-0.19-0.67-0.42-1.04-0.68 c-0.67-0.47-1.37-1-1.93-1.43c-0.01-0.01-0.01-0.01-0.02-0.02c-0.59-0.45-1.01-0.79-1.01-0.79l-1.06,0.04l-2.04,0.07l-0.95,0.04 l-3.82,0.14l-3.23,0.12c-0.21,0.01-0.46,0.01-0.77,0h-0.01c-0.42-0.01-0.92-0.04-1.47-0.09c-0.64-0.05-1.34-0.11-2.05-0.18 c-0.69-0.08-1.39-0.16-2.06-0.24c-0.74-0.08-1.44-0.17-2.04-0.25c-0.47-0.06-0.88-0.11-1.21-0.15c-0.28-0.32-0.53-0.65-0.77-1.01 c-0.36-0.54-0.67-1.11-0.91-1.72c-0.18-0.43-0.33-0.88-0.44-1.34c0.29-0.89,0.67-1.73,1.12-2.54c0.36-0.66,0.78-1.29,1.24-1.89 c0.45-0.59,0.94-1.14,1.47-1.64v-0.01c0.15-0.15,0.3-0.29,0.45-0.42c0.28-0.26,0.57-0.5,0.87-0.73h0.01 c0.01-0.02,0.02-0.02,0.03-0.03c0.24-0.19,0.49-0.36,0.74-0.53c1.48-1.01,3.15-1.76,4.95-2.2c1.19-0.29,2.44-0.45,3.73-0.45 c2.54,0,4.94,0.61,7.05,1.71h0.01c1.81,0.93,3.41,2.21,4.7,3.75c0.71,0.82,1.32,1.72,1.82,2.67c0.35,0.64,0.65,1.31,0.9,1.99 c0.02,0.06,0.04,0.11,0.06,0.16c0.17,0.5,0.32,1.02,0.45,1.54c0.09,0.37,0.16,0.75,0.22,1.13c0.02,0.12,0.04,0.23,0.05,0.35 C36.28,37.99,36.33,38.7,36.33,39.42z"></path>
                                <path fill="#ff9800" d="M34.28,39.42v0.1c0,0.34-0.03,0.77-0.06,1.23c-0.03,0.34-0.06,0.69-0.09,1.02c-0.32,0.07-0.65,0.13-0.98,0.16 h-0.01C32.76,41.98,32.39,42,32,42h-1.75l-0.38-0.11l-1.97-0.6l-2-0.6l-4.63-1.39l-2-0.6c0,0-0.83,0.33-2,0.72h-0.01 c-0.45,0.15-0.94,0.31-1.46,0.47c-0.65,0.19-1.34,0.38-2.02,0.53c-0.7,0.16-1.39,0.28-2.01,0.33c-0.19,0.02-0.38,0.03-0.55,0.03 c-0.56-0.31-1.1-0.68-1.59-1.09c-0.43-0.36-0.83-0.75-1.2-1.18c-0.28-0.32-0.53-0.65-0.77-1.01c0.07-0.45,0.15-0.89,0.27-1.32 c0.3-1.19,0.77-2.33,1.39-3.37c0.34-0.59,0.72-1.16,1.16-1.69c0.01-0.03,0.04-0.06,0.07-0.08c-0.01-0.01,0-0.01,0-0.01 c0.13-0.17,0.27-0.33,0.41-0.48c0-0.01,0-0.01,0-0.01c0.41-0.44,0.83-0.86,1.29-1.25c0.16-0.13,0.31-0.26,0.48-0.39 c0.03-0.03,0.06-0.05,0.1-0.08c2.25-1.72,5.06-2.76,8.09-2.76c3.44,0,6.57,1.29,8.94,3.41c1.14,1.03,2.11,2.26,2.84,3.63 c0.06,0.1,0.12,0.21,0.17,0.32c0.09,0.18,0.18,0.37,0.26,0.57c0.33,0.72,0.59,1.48,0.77,2.26c0.02,0.08,0.04,0.16,0.06,0.24 c0.08,0.37,0.15,0.75,0.2,1.13C34.24,38.21,34.28,38.81,34.28,39.42z"></path>
                                <path fill="#ffc107" d="M32.22,39.42c0,0.2-0.01,0.42-0.02,0.65c-0.02,0.37-0.05,0.77-0.1,1.18c-0.02,0.25-0.06,0.5-0.1,0.75h-5.48 l-1.06-0.17l-4.14-0.66l-0.59-0.09l-1.35-0.22c-0.59,0-1.87,0.26-3.22,0.51c-0.71,0.13-1.43,0.27-2.08,0.36 c-0.08,0.01-0.16,0.02-0.23,0.03h-0.01c-0.7-0.15-1.38-0.38-2.02-0.68c-0.2-0.09-0.4-0.19-0.6-0.3c-0.56-0.31-1.1-0.68-1.59-1.09 c-0.01-0.12-0.02-0.22-0.02-0.27c0-0.26,0.01-0.51,0.03-0.76c0.04-0.64,0.13-1.26,0.27-1.86c0.22-0.91,0.54-1.79,0.97-2.6 c0.08-0.17,0.17-0.34,0.27-0.5c0.04-0.08,0.09-0.15,0.13-0.23c0.18-0.29,0.38-0.57,0.58-0.85c0.42-0.55,0.89-1.07,1.39-1.54 c0.01,0,0.01,0,0.01,0c0.04-0.04,0.08-0.08,0.12-0.11c0.05-0.04,0.09-0.09,0.14-0.12c0.2-0.18,0.4-0.34,0.61-0.49 c0-0.01,0.01-0.01,0.01-0.01c1.89-1.41,4.23-2.24,6.78-2.24c1.98,0,3.82,0.5,5.43,1.38h0.01c1.38,0.76,2.58,1.79,3.53,3.03 c0.37,0.48,0.7,0.99,0.98,1.53h0.01c0.05,0.1,0.1,0.2,0.15,0.3c0.3,0.59,0.54,1.21,0.72,1.85h0.01c0.01,0.05,0.03,0.1,0.04,0.15 c0.12,0.43,0.22,0.87,0.29,1.32c0.01,0.09,0.02,0.19,0.03,0.28C32.19,38.43,32.22,38.92,32.22,39.42z"></path>
                                <path fill="#ffd54f" d="M30.17,39.31c0,0.16,0,0.33-0.02,0.49v0.01c0,0.01,0,0.01,0,0.01c-0.02,0.72-0.12,1.43-0.28,2.07 c0,0.04-0.01,0.07-0.03,0.11h-4.67l-3.85-0.83l-0.51-0.11l-0.08,0.02l-4.27,0.88L16.27,42H16c-0.64,0-1.27-0.06-1.88-0.18 c-0.09-0.02-0.18-0.04-0.27-0.06h-0.01c-0.7-0.15-1.38-0.38-2.02-0.68c-0.02-0.11-0.04-0.22-0.05-0.33 c-0.07-0.43-0.1-0.88-0.1-1.33c0-0.17,0-0.34,0.01-0.51c0.03-0.54,0.11-1.07,0.23-1.58c0.08-0.38,0.19-0.75,0.32-1.1 c0.11-0.31,0.24-0.61,0.38-0.9c0.12-0.25,0.26-0.49,0.4-0.73c0.14-0.23,0.29-0.45,0.45-0.67c0.4-0.55,0.87-1.06,1.39-1.51 c0.3-0.26,0.63-0.51,0.97-0.73c1.46-0.96,3.21-1.52,5.1-1.52c0.37,0,0.73,0.02,1.08,0.07h0.02c1.07,0.12,2.07,0.42,2.99,0.87 c0.01,0,0.01,0,0.01,0c1.45,0.71,2.68,1.78,3.58,3.1c0.15,0.22,0.3,0.46,0.43,0.7c0.11,0.19,0.21,0.39,0.3,0.59 c0.14,0.31,0.27,0.64,0.38,0.97h0.01c0.11,0.37,0.21,0.74,0.28,1.13v0.01C30.11,38.16,30.17,38.73,30.17,39.31z"></path>
                                <path fill="#ffe082" d="M28.11,39.52v0.03c0,0.59-0.07,1.17-0.21,1.74c-0.05,0.24-0.12,0.48-0.21,0.71h-4.48l-2.29-0.63L18.63,42H16 c-0.64,0-1.27-0.06-1.88-0.18c-0.02-0.03-0.03-0.06-0.04-0.09c-0.14-0.43-0.25-0.86-0.3-1.31c-0.04-0.29-0.06-0.59-0.06-0.9 c0-0.12,0-0.25,0.02-0.37c0.01-0.47,0.08-0.93,0.2-1.37c0.06-0.3,0.15-0.59,0.27-0.87c0.04-0.14,0.1-0.27,0.17-0.4 c0.15-0.34,0.33-0.67,0.53-0.99c0.22-0.32,0.46-0.62,0.73-0.9c0.32-0.36,0.68-0.69,1.09-0.96c0.7-0.51,1.5-0.89,2.37-1.1 c0.58-0.16,1.19-0.24,1.82-0.24c2,0,3.79,0.8,5.09,2.09c0.05,0.05,0.11,0.11,0.16,0.18h0.01c0.14,0.15,0.27,0.3,0.4,0.47 c0.37,0.47,0.68,0.98,0.92,1.54c0.12,0.26,0.22,0.53,0.3,0.81c0.01,0.04,0.02,0.07,0.03,0.11c0.14,0.49,0.23,1,0.25,1.53 C28.1,39.2,28.11,39.36,28.11,39.52z"></path>
                                <path fill="#ffecb3" d="M26.06,39.52c0,0.41-0.05,0.8-0.16,1.17c-0.1,0.4-0.25,0.78-0.44,1.14c-0.03,0.06-0.1,0.17-0.1,0.17h-8.88 c-0.01-0.01-0.02-0.03-0.02-0.04c-0.12-0.19-0.22-0.38-0.3-0.59c-0.2-0.46-0.32-0.96-0.36-1.48c-0.02-0.12-0.02-0.25-0.02-0.37 c0-0.06,0-0.13,0.01-0.19c0.01-0.44,0.07-0.86,0.19-1.25c0.1-0.36,0.23-0.69,0.4-1.01c0,0,0.01-0.01,0.01-0.02 c0.12-0.21,0.25-0.42,0.4-0.62c0.49-0.66,1.14-1.2,1.89-1.55c0.01,0,0.01,0,0.01,0c0.24-0.12,0.49-0.22,0.75-0.29c0,0,0,0,0.01,0 c0.46-0.14,0.96-0.21,1.47-0.21c0.59,0,1.16,0.09,1.68,0.28c0.19,0.05,0.37,0.13,0.55,0.22c0,0,0,0,0.01,0 c0.86,0.41,1.59,1.05,2.09,1.85c0.1,0.15,0.19,0.31,0.27,0.48c0.04,0.07,0.08,0.15,0.11,0.22c0.23,0.52,0.37,1.09,0.41,1.69 c0.01,0.05,0.01,0.1,0.01,0.16C26.06,39.36,26.06,39.44,26.06,39.52z"></path>
                                <g>
                                    <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M30,11H18c-3.9,0-7,3.1-7,7v12c0,3.9,3.1,7,7,7h12c3.9,0,7-3.1,7-7V18C37,14.1,33.9,11,30,11z"></path>
                                    <circle cx="31" cy="16" r="1" fill="#fff"></circle>
                                </g>
                                <g>
                                    <circle cx="24" cy="24" r="6" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2"></circle>
                                </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.youtube.com/c/andylenincp" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                                <path fill="red" d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z"></path>
                                <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/andylenincp/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                                <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
                                <path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://github.com/andylenincp" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0,0,256,256">
                                <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                    <g transform="scale(5.12,5.12)">
                                        <path d="M17.791,46.836c0.711,-0.306 1.209,-1.013 1.209,-1.836v-5.4c0,-0.197 0.016,-0.402 0.041,-0.61c-0.014,0.004 -0.027,0.007 -0.041,0.01c0,0 -3,0 -3.6,0c-1.5,0 -2.8,-0.6 -3.4,-1.8c-0.7,-1.3 -1,-3.5 -2.8,-4.7c-0.3,-0.2 -0.1,-0.5 0.5,-0.5c0.6,0.1 1.9,0.9 2.7,2c0.9,1.1 1.8,2 3.4,2c2.487,0 3.82,-0.125 4.622,-0.555c0.934,-1.389 2.227,-2.445 3.578,-2.445v-0.025c-5.668,-0.182 -9.289,-2.066 -10.975,-4.975c-3.665,0.042 -6.856,0.405 -8.677,0.707c-0.058,-0.327 -0.108,-0.656 -0.151,-0.987c1.797,-0.296 4.843,-0.647 8.345,-0.714c-0.112,-0.276 -0.209,-0.559 -0.291,-0.849c-3.511,-0.178 -6.541,-0.039 -8.187,0.097c-0.02,-0.332 -0.047,-0.663 -0.051,-0.999c1.649,-0.135 4.597,-0.27 8.018,-0.111c-0.079,-0.5 -0.13,-1.011 -0.13,-1.543c0,-1.7 0.6,-3.5 1.7,-5c-0.5,-1.7 -1.2,-5.3 0.2,-6.6c2.7,0 4.6,1.3 5.5,2.1c1.699,-0.701 3.599,-1.101 5.699,-1.101c2.1,0 4,0.4 5.6,1.1c0.9,-0.8 2.8,-2.1 5.5,-2.1c1.5,1.4 0.7,5 0.2,6.6c1.1,1.5 1.7,3.2 1.6,5c0,0.484 -0.045,0.951 -0.11,1.409c3.499,-0.172 6.527,-0.034 8.204,0.102c-0.002,0.337 -0.033,0.666 -0.051,0.999c-1.671,-0.138 -4.775,-0.28 -8.359,-0.089c-0.089,0.336 -0.197,0.663 -0.325,0.98c3.546,0.046 6.665,0.389 8.548,0.689c-0.043,0.332 -0.093,0.661 -0.151,0.987c-1.912,-0.306 -5.171,-0.664 -8.879,-0.682c-1.665,2.878 -5.22,4.755 -10.777,4.974v0.031c2.6,0 5,3.9 5,6.6v5.4c0,0.823 0.498,1.53 1.209,1.836c9.161,-3.032 15.791,-11.672 15.791,-21.836c0,-12.682 -10.317,-23 -23,-23c-12.683,0 -23,10.318 -23,23c0,10.164 6.63,18.804 15.791,21.836z"></path>
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ml-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
                {{-- Laravel Logo --}}
                <svg class="w-full text-[#F53003] dark:text-[#F61500] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6" viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
                    <path d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z" fill="currentColor" />
                    <path d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z" fill="currentColor" />
                    <path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
                    <path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
                    <path d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z" fill="currentColor" />
                    <path d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z" fill="currentColor" />
                </svg>

                {{-- Light Mode 12 SVG --}}
                <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] dark:hidden" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />
                        <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#1B1B18" stroke-width="1" />
                        <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#1B1B18" stroke-width="1" />
                        <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#F8B803" />
                        <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#F8B803" />
                        <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#1B1B18" stroke-width="1" />
                        <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#1B1B18" stroke-width="1" />
                    </g>
                    <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#F0ACB8" />
                        <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#F0ACB8" />
                        <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#1B1B18" stroke-width="1" />
                        <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#1B1B18" stroke-width="1" />
                    </g>
                    <g style="mix-blend-mode: plus-darker" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" fill="#F3BEC7" />
                        <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" fill="#F3BEC7" />
                        <path d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z" stroke="#1B1B18" stroke-width="1" />
                        <path d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z" stroke="#1B1B18" stroke-width="1" />
                    </g>
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
                    </g>
                    <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#F0ACB8" />
                        <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
                    </g>
                    <g style="mix-blend-mode: hard-light" class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#F0ACB8" />
                        <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#1B1B18" stroke-width="1" />
                    </g>
                </svg>

                {{-- Dark Mode 12 SVG --}}
                <svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ml-8 lg:ml-0 lg:-mt-[6.6rem] hidden dark:block" viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" fill="black" />
                        <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" fill="black" />
                        <path d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z" stroke="#FF750F" stroke-width="1" />
                        <path d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z" stroke="#FF750F" stroke-width="1" />
                        <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" fill="#391800" />
                        <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" fill="#391800" />
                        <path d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z" stroke="#FF750F" stroke-width="1" />
                        <path d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z" stroke="#FF750F" stroke-width="1" />
                    </g>
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                        <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" fill="#733000" />
                        <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" fill="#733000" />
                        <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1" />
                        <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1" />
                    </g>
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z" stroke="#FF750F" stroke-width="1" />
                        <path d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z" stroke="#FF750F" stroke-width="1" />
                    </g>
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
                        <path d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                        <path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
                    </g>
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                        <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" fill="#4B0600" />
                        <path d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z" stroke="#FF750F" stroke-width="1" stroke-linejoin="round" />
                    </g>
                    <g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4" style="mix-blend-mode:hard-light">
                        <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" fill="#4B0600" />
                        <path d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z" stroke="#FF750F" stroke-width="1" />
                    </g>
                </svg>
                <div class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-r-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]"></div>
            </div>
        </main>
    </div>

    @if (Route::has('login'))
    <div class="h-14.5 hidden lg:block"></div>
    @endif
</body>

</html>