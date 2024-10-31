<?php
$title = "Test UI Page"


?>

<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./assets/logo.png">
    <link rel="stylesheet" href="./css/style.css">
    <title><?php echo $title ?></title>
</head>

<body>
    <div class="flex">
        <div class="sticky">
            <!-- Sidebar on the Side -->
            <nav id="sidebar" class="flex-start sticky top-0 flex h-screen w-64 flex-col justify-between gap-4 border-gray-200 bg-gray-100 px-4 py-4">
                <div class="active flex items-center gap-4 rounded-lg p-3">
                    <a href="/">
                        <img src="./assets/logo.svg" class="size-6" alt="WunschNest Logo" />
                    </a>
                    <span class="self-center whitespace-nowrap text-xl font-semibold">WunschNest</span>
                </div>
                <div class="flex flex-grow flex-col gap-12 pt-8">

                    <ul id="actions">
                        <li>
                            <div class="active flex cursor-pointer items-center gap-4 rounded-lg bg-orange-300 p-3">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="12" y1="8" x2="12" y2="16"></line>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Erstellen</h2>
                            </div>
                        </li>
                    </ul>
                    <ul class="flex flex-col gap-2">

                        <li>
                            <div class="active flex items-center gap-4 rounded-lg bg-gray-500 p-3 py-2 text-white hover:shadow-md">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Dashboard</h2>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Wunschlisten</h2>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200">
                                <span>
                                    <svg class="h-4 w-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M8 8v1h4V8m4 7H4a1 1 0 0 1-1-1V5h14v9a1 1 0 0 1-1 1ZM2 1h16a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1Z" />
                                    </svg>
                                </span>
                                <h2 class="text-md font-semibold">Archiv</h2>
                            </div>
                        </li>
                    </ul>
                    <div>
                        <h3 class="ml-3 pb-2 text-sm font-semibold uppercase">Favoriten</h3>
                        <ul>
                            <li>
                                <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200">
                                    <h2 class="text-md">Weihnachtswünsche</h2>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200">

                                    <h2 class="text-md">Geburtstag</h2>
                                </div>
                            </li>
                            <li>
                                <div class="flex items-center gap-4 rounded-lg p-3 py-2 hover:bg-gray-200">
                                    <!-- <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path>
                                        </svg>
                                    </span> -->
                                    <h2 class="text-md">Hochzeit</h2>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

                <!--  Gefühlt fehlt hier noch ein Bereich an Listen auf die man schnell zugreifen muss. Wenn es hierzu kommt kann dies am besten an dieser Stelle hinzugefügt werden -->
                <div>
                    <div class="flex items-center gap-4 p-3">
                        <div class="s-6 inline-flex items-center justify-center overflow-hidden rounded-full bg-gray-100 dark:bg-gray-600">

                        </div>
                        <span class="text-md font-semibold">Max Mustermann</span>
                    </div>
                    <div class="flex items-center gap-4 p-3">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>
                        </span>
                        <h2 class="text-md font-semibold">Einstellungen</h2>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="mx-auto w-full max-w-screen-xl p-8">
            <!-- Breadcrumbs Navigation -->
            <nav class="mb-8 flex" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li class="inline-flex items-center">
                        <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="me-2.5 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Dashboard
                        </a>
                    </li>

                    <!--
                    Beispiel Elemente für die Breadcrumbs Navigation
                    <li>
                        <div class="flex items-center">
                            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Projects</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="mx-1 h-3 w-3 text-gray-400 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2 dark:text-gray-400">Flowbite</span>
                        </div>
                    </li>

                    -->
                </ol>
            </nav>
            <div class="mb-4 flex justify-between align-middle">

                <h2 class="mb-4">
                    Meine Listen
                </h2>
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" class="rounded-s-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                        Alle
                    </button>
                    <button type="button" class="rounded-e-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                        Geteilt
                    </button>
                </div>
            </div>
            <div class="mb-8 sm:rounded-lg">
                <div class="hb us asn asx cni dmm">
                    <ul class="grid grid-cols-3 gap-6">
                        <li class="overflow-hidden rounded-xl border-[1px] border-gray-100 hover:shadow-md">
                            <div class="flex items-center justify-between gap-4 border-b-[1px] bg-gray-50 p-6">
                                <svg class="size-10 flex-none rounded-full bg-red-400 bg-gradient-to-tr from-emerald-600 p-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <div class="font-medium leading-6 text-gray-950">Weihnachten</div>
                                <div class="ml-auto" data-headlessui-state="">
                                    <button class="" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4 text-gray-400">
                                            <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <dl class="-my-3 px-6 py-4 text-sm">
                                <div class="flex justify-between gap-4 py-3">
                                    <dt class="aze">Datum</dt>
                                    <dd class="azg"><time datetime="2022-12-13">Dezember 24, 2024</time></dd>
                                </div>
                                <div class="flex justify-between gap-4 border-t-[1px] border-gray-100 py-3">
                                    <dt class="aze">Summe</dt>
                                    <dd class="ma zp aax">
                                        <div class="aya azi">€ 2.000,00</div>
                                    </dd>
                                </div>
                            </dl>
                        </li>
                        <li class="overflow-hidden rounded-xl border-[1px] border-gray-100 hover:shadow-md">
                            <div class="flex items-center justify-between gap-4 border-b-[1px] bg-gray-50 p-6">
                                <svg class="size-10 flex-none rounded-full bg-sky-400 bg-gradient-to-tr from-teal-600 p-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <div class="font-medium leading-6 text-gray-950">Geburtstag</div>
                                <div class="ml-auto" data-headlessui-state="">
                                    <button class="" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4 text-gray-400">
                                            <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <dl class="-my-3 px-6 py-4 text-sm">
                                <div class="flex justify-between gap-4 py-3">
                                    <dt class="aze">Datum</dt>
                                    <dd class="azg"><time datetime="2022-12-13">März 16, 2025</time></dd>
                                </div>
                                <div class="flex justify-between gap-4 border-t-[1px] border-gray-100 py-3">
                                    <dt class="aze">Summe</dt>
                                    <dd class="ma zp aax">
                                        <div class="aya azi">€ 400,00</div>
                                    </dd>
                                </div>
                            </dl>
                        </li>
                        <li class="overflow-hidden rounded-xl border-[1px] border-gray-100 hover:shadow-md">
                            <div class="flex items-center justify-between gap-4 border-b-[1px] bg-gray-50 p-6">
                                <svg class="size-10 flex-none rounded-full bg-pink-300 bg-gradient-to-tr from-rose-800 p-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <div class="font-medium leading-6 text-gray-950">Hochzeit</div>
                                <div class="ml-auto" data-headlessui-state="">
                                    <button class="" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4 text-gray-400">
                                            <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <dl class="-my-3 px-6 py-4 text-sm">
                                <div class="flex justify-between gap-4 py-3">
                                    <dt class="aze">Datum</dt>
                                    <dd class="azg"><time datetime="2022-12-13">August 28, 2025</time></dd>
                                </div>
                                <div class="flex justify-between gap-4 border-t-[1px] border-gray-100 py-3">
                                    <dt class="aze">Summe</dt>
                                    <dd class="ma zp aax">
                                        <div class="aya azi">$10.040.00</div>
                                    </dd>
                                </div>
                            </dl>
                        </li>
                        <li class="overflow-hidden rounded-xl border-[1px] border-gray-100 hover:shadow-md">
                            <div class="flex items-center justify-between gap-4 border-b-[1px] bg-gray-50 p-6">
                                <svg class="size-10 flex-none rounded-full bg-sky-500 bg-gradient-to-tr from-indigo-600 p-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" stroke="none" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                </svg>
                                <div class="font-medium leading-6 text-gray-950">Generelle Ideen</div>
                                <div class="ml-auto" data-headlessui-state="">
                                    <button class="" type="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon" class="size-4 text-gray-400">
                                            <path d="M3 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM8.5 10a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM15.5 8.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <dl class="-my-3 px-6 py-4 text-sm">
                                <div class="flex justify-between gap-4 py-3">
                                    <dt class="aze">Datum</dt>
                                    <dd class="azg"><time datetime="2022-12-13">Dezember 31, 2030</time></dd>
                                </div>
                                <div class="flex justify-between gap-4 border-t-[1px] border-gray-100 py-3">
                                    <dt class="aze">Summe</dt>
                                    <dd class="ma zp aax">
                                        <div class="aya azi">$2,000.00</div>
                                    </dd>
                                </div>
                            </dl>
                        </li>
                        <li class="flex cursor-pointer items-center justify-center overflow-hidden rounded-xl border-[1px] border-gray-100 bg-gray-50 hover:bg-gray-100">
                            <p class="font-medium leading-6 text-gray-400">Neue Liste erstellen</p>

                        </li>
                    </ul>
                </div>
            </div>
            <h2 class="mb-4">
                Statistiken
            </h2>
            <div class="flex gap-8">
                <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100">
                    <span class="font-normal text-gray-700 dark:text-gray-400">Wünsche</span>
                    <h5 class="mb-2 text-2xl font-bold text-gray-900">47</h5>
                </div>
                <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100">
                    <span class="font-normal text-gray-700 dark:text-gray-400">Listen Gesamt</span>
                    <h5 class="mb-2 text-2xl font-bold text-gray-900">5</h5>
                </div>
                <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100">
                    <span class="font-normal text-gray-700 dark:text-gray-400">Aktiv Geteilt</span>
                    <h5 class="mb-2 text-2xl font-bold text-gray-900">2</h5>
                </div>
                <div class="flex flex-grow flex-col items-center rounded-lg border border-gray-200 bg-white p-6 shadow hover:bg-gray-100">
                    <span class="font-normal text-gray-700 dark:text-gray-400">Archivierte Listen</span>
                    <h5 class="mb-2 text-2xl font-bold text-gray-900">1</h5>
                </div>
            </div>
            <h2 class="mb-4 mt-8">
                Kategorien
            </h2>
            <div class="flex gap-4">
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Elektronik
                    <div class="absolute -end-2 -top-2 inline-flex h-6 items-center justify-center rounded-full border-2 border-white bg-red-500 px-2 text-xs font-bold text-white dark:border-gray-900">13</div>
                </button>
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Haushalt
                    <div class="absolute -end-2 -top-2 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-red-500 text-xs font-bold text-white dark:border-gray-900">7</div>
                </button>
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Hobby
                    <div class="absolute -end-2 -top-2 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-red-500 text-xs font-bold text-white dark:border-gray-900">2</div>
                </button>
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Dekoartikel
                    <div class="absolute -end-2 -top-2 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-red-500 text-xs font-bold text-white dark:border-gray-900">5</div>
                </button>
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Sport
                    <div class="absolute -end-2 -top-2 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-red-500 text-xs font-bold text-white dark:border-gray-900">8</div>
                </button>
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Gesundheit
                    <div class="absolute -end-2 -top-2 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-red-500 text-xs font-bold text-white dark:border-gray-900">9</div>
                </button>
                <button type="button" class="relative inline-flex items-center rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-center text-sm font-medium text-gray-700 hover:bg-blue-700 hover:text-white focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Küche
                    <div class="absolute -end-2 -top-2 inline-flex h-6 w-6 items-center justify-center rounded-full border-2 border-white bg-red-500 text-xs font-bold text-white dark:border-gray-900">2</div>
                </button>
            </div>
            <div class="mb-4 mt-8 flex justify-between align-middle">

                <h2 class="mb-4">
                    Weihnachtswunschliste
                </h2>
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <button type="button" class="rounded-s-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                        Alle
                    </button>
                    <button type="button" class="rounded-e-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:text-blue-700 focus:ring-2 focus:ring-blue-700 dark:border-gray-700 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white dark:focus:text-white dark:focus:ring-blue-500">
                        Geteilt
                    </button>
                </div>
            </div>
            <div class="mb-8 sm:rounded-lg">
                <table class="w-full text-left text-sm text-gray-500 rtl:text-right dark:text-gray-400">
                    <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Product name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Color
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 text-right">
                                Price
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-1" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                Apple MacBook Pro 17"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Laptop
                            </td>
                            <td class="px-6 py-4 text-right">
                                €2999,00
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-2" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                    <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                Microsoft Surface Pro
                            </th>
                            <td class="px-6 py-4">
                                White
                            </td>
                            <td class="px-6 py-4">
                                Laptop PC
                            </td>
                            <td class="px-6 py-4 text-right">
                                €1999,00
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-search-3" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                    <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                Magic Mouse 2
                            </th>
                            <td class="px-6 py-4">
                                Black
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4 text-right">
                                €99,00
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-3" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                    <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                Apple Watch
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                Accessories
                            </td>
                            <td class="px-6 py-4 text-right">
                                €179,00
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="border-b bg-white hover:bg-gray-50 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-3" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-2 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600 dark:focus:ring-offset-gray-800">
                                    <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900 dark:text-white">
                                iPad
                            </th>
                            <td class="px-6 py-4">
                                Gold
                            </td>
                            <td class="px-6 py-4">
                                Tablet
                            </td>
                            <td class="px-6 py-4 text-right">
                                €699,00
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Edit</a>
                            </td>
                        </tr>
                        <tr class="bg-white hover:bg-gray-50 dark:bg-gray-800 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-table-3" type="checkbox" class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-blue-600 focus:ring-blue-500">
                                    <label for="checkbox-table-3" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">
                                Apple iMac 27"
                            </th>
                            <td class="px-6 py-4">
                                Silver
                            </td>
                            <td class="px-6 py-4">
                                PC Desktop
                            </td>
                            <td class="px-6 py-4 text-right">
                                €3999,00
                            </td>
                            <td class="px-6 py-4">
                                <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>