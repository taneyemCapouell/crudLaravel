<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Pricing example</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


</head>

<body>

    <div class="container py-3">
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1>Detail d'un etudiant</h1>
                        <hr>
                        <p class="mb-3">Nom : {{ $etudiants->nom }} </p>
                        <hr>
                        <p class="mb-3">Prenom : {{ $etudiants->prenom }}</p>
                        <hr>
                        <p class="mb-3">Classe : {{ $etudiants->classe }}</p>
                        <hr>
                        <a class="btn btn-primary" href="liste_etudiant">Retour au tableau</a>
                    <div>
                </div>
            <div>

        </main>
    </div>

</body>

@extends('master')

@section('content')

<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Details d'un etudiant</h1>
    <div class="row">
        <div class="col-md-6">
            <h1>Detail d'un etudiant</h1>
            <hr>
            <p class="mb-3">Nom : {{ $etudiants->nom }} </p>
            <hr>
            <p class="mb-3">Prenom : {{ $etudiants->prenom }}</p>
            <hr>
            <p class="mb-3">Classe : {{ $etudiants->classe }}</p>
            <hr>
            <a class="btn btn-primary" href="etudiant">Retour au tableau</a>
        <div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection 


