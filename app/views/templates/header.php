<!DOCTYPE html>
<html lang="en" data-theme="fantasy">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.8.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
    </style>
    <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
    <title>Peminjaman <?= $data['judul'] ?></title>
</head>

<body>
    <div class="navbar shadow-lg bg-blue-700 text-neutral-content rounded-sm">
        <div class="flex-none px-2 mx-2">
            <span class="text-lg font-bold">
                INVENTARIS
            </span>
        </div>
        <div class="flex-1 px-2 mx-2">
            <div class="items-stretch lg:flex">
                <a class="btn btn-ghost btn-sm rounded-btn" href="<?= BASE_URL ?>/home/index">
                    Home
                </a>
                <a class="btn btn-ghost btn-sm rounded-btn" href="<?= BASE_URL ?>/form/index">
                    Peminjaman
                </a>
            </div>
            <div class="flex justify-center items-start">
                <a id="theme-switcher" class="cursor-pointer text-[25px]" ></a>
            </div>
        </div>

    </div>