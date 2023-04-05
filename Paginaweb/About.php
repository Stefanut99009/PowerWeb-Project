<!doctype html>
<html x-data="{colorMode: localStorage.getItem('colorMode') || localStorage.setItem('colorMode', 'light')}" x-init="$watch('colorMode', val => localStorage.setItem('colorMode', val))" x-bind:class="{'dark': colorMode === 'dark' || (colorMode === 'system' && window.matchMedia('(prefers-color-scheme: dark)').matches)}" class="scroll-smooth h-full overflow-y-auto">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The Play CDN is designed for development purposes only, and is not the best choice for production. -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <link id="heading-font" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@300;400;500;600;700;800;900&display=swap" media="all" />
    <title>About us | PowerSocial</title>
    <link rel="icon" type="image/x-icon" href="Poze/PS-favicon.png">
    <style>
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "DM Sans", ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }
    </style>
    <script>
        window.tailwind.config = {
            "darkMode": "class",
            "theme": {
                "fontFamily": {
                    "heading": ["DM Sans", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "\"Segoe UI\"", "Roboto", "\"Helvetica Neue\"", "Arial", "\"Noto Sans\"", "sans-serif", "\"Apple Color Emoji\"", "\"Segoe UI Emoji\"", "\"Segoe UI Symbol\"", "\"Noto Color Emoji\""],
                    "body": ["DM Sans", "ui-sans-serif", "system-ui", "-apple-system", "BlinkMacSystemFont", "\"Segoe UI\"", "Roboto", "\"Helvetica Neue\"", "Arial", "\"Noto Sans\"", "sans-serif", "\"Apple Color Emoji\"", "\"Segoe UI Emoji\"", "\"Segoe UI Symbol\"", "\"Noto Color Emoji\""]
                },
                "extend": {
                    "borderRadius": {
                        "global": "5px"
                    },
                    "colors": {
                        "primary": {
                            "50": "#f8f5ff",
                            "100": "#eee6fe",
                            "200": "#ddcefd",
                            "300": "#c1a6fc",
                            "400": "#844df9",
                            "500": "#4d07e4",
                            "600": "#3705a3",
                            "700": "#280477",
                            "800": "#170245",
                            "900": "#0c0123",
                            "950": "#070114",
                            "DEFAULT": "#570df8"
                        },
                        "secondary": {
                            "50": "#fff5fd",
                            "100": "#ffe6f9",
                            "200": "#fecdf3",
                            "300": "#fea4e9",
                            "400": "#fd49d3",
                            "500": "#e802b3",
                            "600": "#a70280",
                            "700": "#79015d",
                            "800": "#470136",
                            "900": "#23001b",
                            "950": "#140010",
                            "DEFAULT": "#f002b8"
                        }
                    }
                }
            },
            "plugins": [window.tailwind.plugin.withOptions(({
                prefix = "ui"
            } = {}) => {
                return ({
                    addVariant
                }) => {
                    for (let state of ["open", "checked", "selected", "active", "disabled"]) {
                        addVariant(`${prefix}-${state}`, [
                            `&[data-headlessui-state~="${state}"]`,
                            `:where([data-headlessui-state~="${state}"]) &`,
                        ]);

                        addVariant(`${prefix}-not-${state}`, [
                            `&[data-headlessui-state]:not([data-headlessui-state~="${state}"])`,
                            `:where([data-headlessui-state]:not([data-headlessui-state~="${state}"])) &:not([data-headlessui-state])`,
                        ]);
                    }
                };
            }), ]
        };
    </script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body x-data="{'openDialogId': ''}" x-on:keydown.escape="openDialogId=''" class='font-body antialiased h-full font-body antialiased text-[#000000] bg-[#fcfcfc] dark:text-[#ffffff] dark:bg-[#031022]'>
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="px-4 py-16 mx-auto sm:max-w-xl sm:py-14 md:max-w-full md:px-24 lg:max-w-screen-xl lg:px-8">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-slate-900 dark:text-slate-100 sm:text-4xl md:mx-auto">Meet the crew</h2>
                <p class="mt-1 text-gray-600 dark:text-gray-400">Creative people</p><br>
                <p class="md:text-lg">This hackathon we had an exciting experience working collaboratively to create our project. The hackathon provided us with a great opportunity to learn from each other and challenge ourselves.</p>
            </div>
        </div>

        <div class="grid grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="Poze/mada.jpg" />
                <div class="sm:flex sm:flex-col sm:h-full">
                    <div class="">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">Chiforiuc Madalina Andreea Chiforiuc</h3>
                        <p class="mt-1 text-xs uppercase text-gray-500">Student</p>
                    </div>
                    <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                                </svg></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"></path>
                                </svg></span></a></div>
                </div>
            </div>
            <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="Poze/cristian.jpg" />
                <div class="sm:flex sm:flex-col sm:h-full">
                    <div class="">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">Cristian Baltag</h3>
                        <p class="mt-1 text-xs uppercase text-gray-500">Student</p>
                    </div>
                    <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                                </svg></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"></path>
                                </svg></span></a></div>
                </div>
            </div>
            <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4"><img class="rounded-lg w-20 h-20" alt="No alt" src="Poze/stefanut.jpg" />
                <div class="sm:flex sm:flex-col sm:h-full">
                    <div class="">
                        <h3 class="font-medium text-gray-800 dark:text-gray-200">Stefanut Pazargic</h3>
                        <p class="mt-1 text-xs uppercase text-gray-500">Student</p>
                    </div>
                    <div class="mt-2 sm:mt-auto space-x-2.5"><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"></path>
                                </svg></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                                </svg></span></a><a class="inline-flex justify-center items-center text-gray-500 hover:text-gray-800 dark:hover:text-gray-200" href="#"><span class="w-3.5 h-3.5"><svg class="w-3.5 h-3.5" class="w-3.5 h-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M3.362 10.11c0 .926-.756 1.681-1.681 1.681S0 11.036 0 10.111C0 9.186.756 8.43 1.68 8.43h1.682v1.68zm.846 0c0-.924.756-1.68 1.681-1.68s1.681.756 1.681 1.68v4.21c0 .924-.756 1.68-1.68 1.68a1.685 1.685 0 0 1-1.682-1.68v-4.21zM5.89 3.362c-.926 0-1.682-.756-1.682-1.681S4.964 0 5.89 0s1.68.756 1.68 1.68v1.682H5.89zm0 .846c.924 0 1.68.756 1.68 1.681S6.814 7.57 5.89 7.57H1.68C.757 7.57 0 6.814 0 5.89c0-.926.756-1.682 1.68-1.682h4.21zm6.749 1.682c0-.926.755-1.682 1.68-1.682.925 0 1.681.756 1.681 1.681s-.756 1.681-1.68 1.681h-1.681V5.89zm-.848 0c0 .924-.755 1.68-1.68 1.68A1.685 1.685 0 0 1 8.43 5.89V1.68C8.43.757 9.186 0 10.11 0c.926 0 1.681.756 1.681 1.68v4.21zm-1.681 6.748c.926 0 1.682.756 1.682 1.681S11.036 16 10.11 16s-1.681-.756-1.681-1.68v-1.682h1.68zm0-.847c-.924 0-1.68-.755-1.68-1.68 0-.925.756-1.681 1.68-1.681h4.21c.924 0 1.68.756 1.68 1.68 0 .926-.756 1.681-1.68 1.681h-4.21z"></path>
                                </svg></span></a></div>

                </div>
            </div>



        </div>
    </div>


</body>

</html>