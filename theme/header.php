<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fivehdstarter
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700|Oswald:700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site ">

  <header id="masthead" class="site-header">
    <div class="logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo; ?><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 389.61 189.75"><defs><style>.cls-3{fill:#231f20}</style><clipPath id="clip-path" transform="translate(-5.2 -5.13)"><path fill="none" d="M5.2 5.12h389.61v189.75H5.2z"/></clipPath></defs><g clip-path="url(#clip-path)"><path class="cls-3" d="M239.28 52.26a22.34 22.34 0 0 1 .43-3.69A93.65 93.65 0 0 0 241 34.78v-3.45c.23-2.46 2.14-15.51 2.36-16.74 0-.26 0-.75-.22-.75 0-.24.43-.74.64-.74l2.56-.49c.21 0 1.06-.5 1.27-.5l3.63.26 1.28 1.23a25.91 25.91 0 0 1 .85 6.41c0 .24-.64 3.69-.64 3.93s-.64 5.66-.64 7.39l-2.35 19.46 8.53-1.48c4.9-1 8.74-2.22 14.29-3.45a54.85 54.85 0 0 1 11.71-1.72c1.5 0 8.27.74 8.27 3.7 0 1-4.22 1.22-4.43 1.22-.85 0-.85-1.47-2.56-2a13.37 13.37 0 0 0-4-.49 22.25 22.25 0 0 0-8.94 1.48c-7.47 1.48-15.14 3.94-23 5.41-.43 4.44-.86 8.87-1.07 13.3l-.86 6.41c-.21 3-.42 11.08-.42 11.58 0 3.69-.42 9.85-.85 15.76 0 20.44-.43 25.37.21 32V134l.43 2.46c0 .24.42 2.22.42 2.46v2.22a22.63 22.63 0 0 0 .43 3.2 18.39 18.39 0 0 0 .43 3.45 14.06 14.06 0 0 1 .64 3c.64 2.46.84 4.92 1.27 7.39.22 1 .86 4.19.86 4.43s.63 2.22.63 2.47c0 .49.86 3.44.86 3.93 0 .25.64 1 .64 1.24l.21 1.23c0 .24.85 2.7.85 3 1.49 6.4 6.18 14.53 10.87 17.49.86.74 2.78 1 4.69 1 4.47 0 9.38-2.47 13-6.66l1.07-1.47a21.12 21.12 0 0 1 2.34-2.71c.42-.5.42-2 .85-2.46l.86-.49c0-.25.42-1.74.42-2a15.8 15.8 0 0 1 1.28-2.71s1.78-4.69 2.42-6.41c.85-3-.27 1.49.16-.73a1.45 1.45 0 0 1 2.3-.4c.51.44 0 1.61-.23 2.5-1.07 3.46-.85 3.14-1.31 3.78l.24-.64a32.31 32.31 0 0 1-2.51 5.35c-.86 1.73-1.93 3.45-3 5.16-5.32 7.64-10.87 11.83-17.26 11.83a28 28 0 0 1-6.18-.73c-1.28-.25-2.14-1.23-3.41-2l-2.56-1.49c-3.83-2-6.61-5.41-8.95-9.35-.64-1-1.92-2-2.77-4.68l-2-4.66a48.74 48.74 0 0 1-2.56-7.88c0-.24-.84-1.22-.84-1.47-.43-1.23-.86-3.94-1.28-5.41l-1.29-5.42c-.85-3.7-.63-7.64-1.28-11.34 0-.25-.42-1.72-.42-2-.21-1.23-.42-5.67-.42-6.66V98.33c0-.25.21-6.41.21-7.64 0-4.19.63-21.42 2.12-35.46-2.76.24-5.75.49-8.52.49-.21 0-1.91-1.24-2.13-1.24h-1.49a9.37 9.37 0 0 1-3.84-1.48l-4-1.95c-1.06-1.48-.46-4.71-.46-7.41 0-3.7 1.5-7.64 4.48-7.64a2.34 2.34 0 0 1 1.28.25 12.32 12.32 0 0 0-1.49 6.4c0 4.43 1.71 9.11 5.33 9.85a7.2 7.2 0 0 0 2.56.24c2.77 0 5.75-.24 8.73-.49" transform="translate(-5.2 -5.13)"/><path class="cls-3" d="M290.14 101.05c3.64 0 4.61 1.65 6.31 4.51a17.88 17.88 0 0 1 1.94 8.41v2.27a7.69 7.69 0 0 1-.49 1.64c0 .2-1 2.66-1 2.86s-.49 1.85-.49 2.06a19.54 19.54 0 0 1-1.46 2c-.73 1.23-1.45 2.87-2.43 3.69a5.19 5.19 0 0 1-1.45.82 13.91 13.91 0 0 1-4.85 2.87c-.73.21-3.64.21-4.86.41v2.88c.25 5.74 1.94 12.72 7.29 17 1.45 1.23 5.82 1.23 7.28 1.23 2.42 0 4.85-.2 5.82-.82l1.21-1.22a50.71 50.71 0 0 0 5.83-3.7 48 48 0 0 0 8.74-10.26c2.42-3.49 3.64-7.18 6.3-11.28a1.76 1.76 0 0 1 1.21-.41c.74 0 1.22.62 1.46 1.44-4.36 8.82-6.79 11.28-8.48 14a13.82 13.82 0 0 1-1.46 2.46A41.09 41.09 0 0 1 303 154.8c-1 .61-6.31 1.65-7.52 1.65a28 28 0 0 1-18-6.16 34.4 34.4 0 0 1-3.89-4.72c-2.9-4.31-3.87-9.44-3.87-15.59a21.3 21.3 0 0 1 .48-4.31c.24 0 .49-.62.49-.82v-3.28c1.69-7.6 5.58-13.34 12.13-18.47 1.7-1.23 3.64-1.84 7.28-2m-5.83 29.75c2.92 0 8.5-4.72 9.47-6.77 1-1.85 1.21-4.1 1.94-6.15a5.34 5.34 0 0 0 .48-1.64v-2.88c0-2.87-.23-5.33-2.18-8.21a5.12 5.12 0 0 0-4.37-2.45c-1.94 0-2.9 1.22-3.39 3.06a45.83 45.83 0 0 0-2.18 4.52v.83c0 .2-1 1.84-1 2-.74 3.29-1 6.37-1.71 9.65-.24.82 0 3.28-.48 4.51a8 8 0 0 0 .24 2.26c.49 1 1.46 1.23 3.15 1.23" transform="translate(-5.2 -5.13)"/><path class="cls-3" d="M344.16 152.38c-1.47 1.65-3.42 4.75-6.36 5.16h-1a22.27 22.27 0 0 1-3.93-.41c-.24 0-1-.83-1-.83-2.2-1.24-4.65-1.86-6.36-3.71-2.2-2.48-1.47-4.34-2.45-7.43-.74-2.27-1-4.75-1-12 0-.21.74-2.08.74-2.28 1.71-10.32 3.18-13.2 6.61-20a36 36 0 0 1 10.76-12.8c4.15-3.51 9.05-6.4 14.68-6.4a20.12 20.12 0 0 1 8.56 2.07c7.34 3.3 9.3 10.73 9.3 18.57 0 4.54-1.23 8.25-3.67 12.58l-1.47.84-.49-1c0-1.85 1.23-3.09 1.47-4.32 0-.21.73-1.24.73-1.45a33.4 33.4 0 0 0 1.23-8.46c0-3.92-1.47-8.66-2.94-10.73a16.4 16.4 0 0 0-.49-1.65l-1-.62a16.76 16.76 0 0 0-10-3.91 10.07 10.07 0 0 0-2.69.41 16.32 16.32 0 0 0-7.34 5.36l-2.45 2.48c-1.22 1.44-1.22 2.68-1.95 4.12a13.71 13.71 0 0 0-1.47 2.47 43.62 43.62 0 0 0-2.45 7.43c-.48 2.07-1.71 4.34-2 6.61v2.9c0 .2-.48 1.43-.48 1.64a109.62 109.62 0 0 0-1.47 20c0 7.43 2.2 8.67 2.69 8.67 3.67 0 8.81-8.05 9.54-9.49V145c.25-2.06 1.71-3.3 2.44-5.16 0-1.64.49-4.12.49-4.53 0-.62.49-5.17.49-5.79.25-1.85.74-4.32 2-5.77a3 3 0 0 1 2-1.24h4.4a15.3 15.3 0 0 1 2.94 2.47 3.56 3.56 0 0 1 .49 1.66c0 1.24-.25 3.71-.25 4.95 0 3.92-.73 6-.73 9.08a41.3 41.3 0 0 0 .49 5.77c0 1.86 1.22 3.93 1.47 5.79 1.22 3.09 2.93 4.74 4.89 4.74 1.71 0 3.67-1 5.87-2.89a39.27 39.27 0 0 0 5.87-6.4l2.7-4.12a7.9 7.9 0 0 0 1-2.07c1-1.86 4.16-6 4.65-8.24.74-2.08 3.67-6.61 4.41-8a3.31 3.31 0 0 1 2.19-1.24 1.22 1.22 0 0 1 1 .81 80 80 0 0 1-3.91 8.05l-2.91 5.28a64.41 64.41 0 0 1-5.39 8.45l-1 1.24c0 .21-1.72.83-1.72 1s-.24 1.66-.24 1.86a19.56 19.56 0 0 1-3.67 3.71l-2.2 1.65a8 8 0 0 1-6.37 2.69 10.19 10.19 0 0 1-4.64-.82c-.25 0-2.7-1.24-2.94-1.24-2.44-1.45-4.16-1.45-6.61-5.78-2.69-2.48-4.4-6.19-4.4-7a29 29 0 0 1-4.65 8.46M99.55 160.55c-1.47 1.65-3.43 4.75-6.36 5.16h-1a22.15 22.15 0 0 1-3.92-.41c-.24 0-1-.83-1-.83-2.21-1.24-4.65-1.85-6.36-3.71-2.21-2.48-1.47-4.34-2.45-7.43-.74-2.27-1-4.75-1-12 0-.21.73-2.08.73-2.28 1.72-10.32 3.19-13.2 6.61-20a36.13 36.13 0 0 1 10.77-12.8c4.15-3.5 9-6.4 14.68-6.4a20.27 20.27 0 0 1 8.56 2.07c7.34 3.3 9.3 10.73 9.3 18.57 0 4.54-1.23 8.25-3.68 12.59l-1.46.83-.5-1c0-1.86 1.23-3.09 1.48-4.33 0-.21.73-1.23.73-1.44a34 34 0 0 0 1.23-8.47c0-3.92-1.48-8.66-2.94-10.73a16.16 16.16 0 0 0-.5-1.65l-1-.61a16.73 16.73 0 0 0-10-3.92 10.07 10.07 0 0 0-2.69.41 16.32 16.32 0 0 0-7.34 5.36L99.06 110c-1.22 1.44-1.22 2.68-2 4.12a13.64 13.64 0 0 0-1.46 2.47 43.62 43.62 0 0 0-2.41 7.41c-.49 2.07-1.72 4.34-2 6.61v2.89c0 .21-.49 1.45-.49 1.65a110.62 110.62 0 0 0-1.47 20c0 7.43 2.2 8.66 2.7 8.66 3.67 0 8.8-8 9.54-9.49v-1.24c.24-2.06 1.71-3.29 2.44-5.16 0-1.65.49-4.12.49-4.53 0-.62.49-5.17.49-5.78.25-1.86.74-4.33 1.95-5.78a3 3 0 0 1 2-1.24h4.4a15.75 15.75 0 0 1 2.94 2.48 3.49 3.49 0 0 1 .49 1.66c0 1.23-.25 3.7-.25 4.94 0 3.92-.73 6-.73 9.09a41.5 41.5 0 0 0 .49 5.77c0 1.85 1.22 3.92 1.47 5.78 1.22 3.09 2.93 4.74 4.88 4.74 1.72 0 3.68-1 5.88-2.89a38.7 38.7 0 0 0 5.86-6.4l2.71-4.12a8 8 0 0 0 1-2.06c1-1.86 4.16-6 4.65-8.25.74-2.08 3.67-6.6 4.4-8.05a3.35 3.35 0 0 1 2.2-1.25 1.22 1.22 0 0 1 1 .83 83.1 83.1 0 0 1-3.91 8l-2.93 5.37a65 65 0 0 1-5.39 8.47l-1 1.3c0 .21-1.72.83-1.72 1s-.25 1.65-.25 1.86a20.12 20.12 0 0 1-3.66 3.71l-2.21 1.65a8 8 0 0 1-6.37 2.68 10.11 10.11 0 0 1-4.64-.82c-.25 0-2.69-1.24-2.93-1.24-2.45-1.45-4.16-1.45-6.61-5.78-2.69-2.47-4.4-6.19-4.4-7a28.84 28.84 0 0 1-4.65 8.46M22 165a35 35 0 0 0-2.47-5.24 9.37 9.37 0 0 1-.49-2.52c0-.42.25-1.05.25-1.68a6.2 6.2 0 0 1-.75-1c0-.85-.74-3.57-.74-4.2s-.49-3.15-.49-4.41c0-.41 0-.62.25-.62v-3.58c.24-.62.49-.83.49-1a10 10 0 0 1-.25-1.48 10.14 10.14 0 0 1 .2-1.57l.74-.84v-3.35a4 4 0 0 1 .74-2.52l1.52-9.44c.49-1.25.24-3.77 1.72-4.41v-1.25a10.17 10.17 0 0 1 .74-3.78c1.73-2.1 2.47-9 3.2-11.75.5-1.88 2-3.77 2.23-5.66v-1.47c0-.63 1.48-1.89 1.72-2.73 0-.63.25-2.52 1-2.93l1.23-3.78c.49-.42.49-.84.49-2.09 0-.22.74-1.27.74-1.69V76a2.22 2.22 0 0 1-.74-1.68c0-1 .25-1.88.25-2.73a3.49 3.49 0 0 0-.25-1.47v-3.75a3.33 3.33 0 0 1-.49-1.46 7.89 7.89 0 0 1 .49-2.1l-.49-9.43c-.5-3-1.49-5.25-1.49-8v-1.66a10.19 10.19 0 0 1-1-3.14v-2.1c-.25-2.1-1.72-3.78-2-6.09-.75-2.93-1.48-3.35-1.74-6.29A43.34 43.34 0 0 0 20 8.27C19.27 8.06 17.54 7 17.29 7c-1.48 0-5.67 3.57-5.67 4.83 0 1-1.24 2.31-1.49 2.94l-2 5v2.1c0 .84-.25 3.35-.25 3.77a2.38 2.38 0 0 1-2 2.1c-.25 0-.5 0-.74-.63V21.7c0-.21.49-2.73.49-2.94v-1.47c.25-1.46 1.48-2.09 2.22-3.35 2-2.73 3.95-6.51 7.4-8.61a14.85 14.85 0 0 1 3.21-.2c2 0 4 .2 4.94.84.25 0 1.24 1.25 1.48 1.25 2.22 1.47 3.71 1.9 5.67 3.57 4.51 4.41 6.98 14.47 9.45 16.36a19 19 0 0 1 1.73 5.24c.5 2.74 2 5.46 2.23 8.19l.74 7.55c0 1.26.24 3.14 1.72 3.14a3.92 3.92 0 0 0 2.47-1.46L52.34 45c1.48-.62.48-.83 1.72-2.09l3.46-3.36a13.65 13.65 0 0 1 3.7-3.55l2.47-2.73c1-1.26 2.22-1.9 3.7-3.15a79 79 0 0 1 6.66-5.46c.25 0 1.48-.83 1.73-.83L78 22.11c1.22-.62 2.71-.84 3.94-1.67l.74-.63a25.81 25.81 0 0 1 10.62-2.73c8.64 0 11.6 2.31 15.06 5a23.89 23.89 0 0 1 8.88 14.48 29 29 0 0 1 .49 4.61c0 8-4.19 15.32-8.14 22-.49.83-1.48 2.72-2.47 3.34-1 1.06-2.22 1.9-2.71 3.37l-9.13 9.44c-.74 1-1 .62-1.73 1.67l-4.93 4.41c-1 .41-2.23 1.89-3 2.31l-1.24.84c-2.71 1.88-6.91 5-8.15 6.08 0 0-1.23.63-1.48.83-2 .64-3.46 2.32-5.43 3.36-.24.21-3.2.84-3.45 1.26-2.72.85-4.69 2.94-9.38 3.36-1.24 0-2 1-3.21 1-.73 0-2.71-.21-3.21-.21s-1.47-.22-1.47-2.31a7.75 7.75 0 0 1 .24-1.89c1.23-.84 1-2.93 3.71-2.93 1.47 0 3.2 1.26 3.2 2.51V101c-1 .41-1.23.84-1.23 1s.24.21 1 .21c1.73 0 5.92-1 6.66-2.1a69.28 69.28 0 0 0 8.63-4.41 7.56 7.56 0 0 1 2.72-1.88c7.65-6.72 15.79-12.8 21-21.39l2-2.94 3.95-10.28a13 13 0 0 1 1.73-4.2 66.32 66.32 0 0 1 1-7.34 60.39 60.39 0 0 0 1-9.23 6.36 6.36 0 0 0 .25-1.26c0-.63-1-5.45-1-6.08s-.24-4.2-.24-4.62c-.25-1.67-.74-1.46-1.73-2.93-.75-1.68-.49-3.15-2.47-4.41a27.1 27.1 0 0 0-4.19-1.05c-.74 0-2 .63-2.72.63H89.6c-3 .42-4.69 1.89-8.14 3.56A76.63 76.63 0 0 0 62.21 36.8c-1.49 1.47-8.39 8.4-8.39 9.65 0 1.68-4.2 6.3-5.68 8.18l-.25 1s-1.48 1.26-1.48 1.68a43 43 0 0 0-.74 7.13c0 2.31.5 4.4.5 11.33 0 .42-.5 1.68-.5 1.89a28.76 28.76 0 0 1 .5 4.61c0 .22-.25.84-.25 1.05 0 1 .49 2.1.49 4.2 0 .62 0 1.68-.49 2.09v4.83c0 1.68-.74 9-.74 10.69 0 .22-.25 1.06-.25 1.26v5.25c0 1.89-.74 3.78-.74 5.66a94.54 94.54 0 0 1-1 12.17 18.77 18.77 0 0 0-.74 3.15c-.24 2.09 0 4-.49 5.66 0 .21-.74.83-.74 1V143a4.21 4.21 0 0 1-.74 2.72c-.5.84-1.24 3.57-1.73 4.83-.49 1.47-3.45 8.18-3.7 9.44l-1.48 1.89c-.5 2.09-1 1.67-1.47 2.09-1.25 1.68-2.73 3.77-6.18 3.77-.74 0-2.47 0-3.21-.62A3.61 3.61 0 0 0 22 165m3.95 1.27a3.39 3.39 0 0 0 3-2.53c1.23-4.82 2.72-7.34 2.72-10.69 1-2.32 1-3.78 1.47-7.35v-1.88a6.08 6.08 0 0 1 .5-2.94v-4l.74-1v-3.37c0-.2.24-1.67.24-1.88.25-4.82.25-9.86.25-14.68v-13.49a15.22 15.22 0 0 1-.25-3.36c0-3.36.5-6.71.5-10.07a5.41 5.41 0 0 0-.74-2.3c-1.24 0-3.71 7.34-3.71 7.55s-.24 1.46-.24 1.68-1.23 1.68-1.23 1.89c0 1-.49 1.68-.49 3.15a42.19 42.19 0 0 0-2.23 9.43v.64c0 .2-1 1.25-1 1.46-.5 1.26-.5 2.73-1 3.78a2.91 2.91 0 0 0-.74 1.25l-1.23 9.24a80.16 80.16 0 0 0-2 8.8c-.49 2.52 0 4.62-1.23 6.51a89 89 0 0 0 1.23 14 18.87 18.87 0 0 0 1 2.09c1 1.48 1.47 8 4.44 8" transform="translate(-5.2 -5.13)"/><path class="cls-3" d="M167.24 154.87l-2-1.25a16.08 16.08 0 0 1-3.18-10.14c0-5.8 2.2-11.81 4.16-16.36l1.94-3.32c1.23-2.07 1.72-4.56 2.7-6.63a6.18 6.18 0 0 0 1.46-3.1c0-.83-2.2-1-2.44-1h-3.66c-2.7-.2-4.89-.42-6.6-.42a4.61 4.61 0 0 0-2.45.42c-.23.21-1.21 1-1.21 1.25 0 .41-.49 2.69-.49 3.1a23 23 0 0 1-2 3.32V123c-.73 2.06-1.46 2.89-1.95 4.34-.74 1.87-.74 4.56-1.71 6.43a51.72 51.72 0 0 1-3.67 7c-1.46 0-2.19-.42-2.44-1.67 1.47-2.89 3.42-5.58 4.4-8.28l2-6c0-.21.49-1 .49-1.25s1-1 1-1.24.73-2.27.73-2.69c0-.21.24-2.07.24-2.28s1-1 1-1.24v-1.25a26.76 26.76 0 0 0 1-2.9c-.73-2.07-4.15-4.14-6.35-6-3.42-3.11-4.64-6.21-4.64-9.11 0-6.42 6.6-11.6 11.48-11.6a5.09 5.09 0 0 1 4.88 3.11v1.66a9.83 9.83 0 0 1 .49 3.31c0 .42-.49 2.89-.49 3.31 0 .83-1.22 7.25-1.22 8.07 0 .21-.73 2.08-.73 2.29 0 0 2.2 2.07 2.69 2.48 2.19 1.25 6.59.83 10.74 1.45 4.4.82 12.21 2.49 12.21 6.84a13 13 0 0 1-1.22 6.21c-1.22 3.11-1.95 6.21-3.18 9.32a34.79 34.79 0 0 0-1.46 4.55v2.49c0 .21-1 2.7-1 2.9 0 2.48-.74 5.18-.74 8.07 0 2.28 1.46 7.88 6.6 7.88a15.31 15.31 0 0 0 8.54-2.07 38.89 38.89 0 0 0 8.06-7.46c1-1 3.91-6 4.4-8.28.25-.42 1.47-1.46 4.89-7.87a2.22 2.22 0 0 1 1.94-1c.49 0 1 1 1 1.26-1.7 3.1-2.92 6.62-6.59 12.21a36.31 36.31 0 0 1-2.44 4.35l-.74.21a4.49 4.49 0 0 0-1.22 2.27l-2.68 2.7-1.22.41a24.42 24.42 0 0 1-3.42 3.32c-2.69 1.23-6.6 3.11-11.48 3.11a16.57 16.57 0 0 1-10-3.11zM155 102.47c0 .62 1.47 2.27 1.47 2.27.49-1 .49-2.68.49-7.86 0-.21.72-2.07.72-2.28 0-.82-.24-4.35-.24-5.18 0-.62-.25-1.24-.73-1.24-.73 0-1 .83-1.22 1.66a11.14 11.14 0 0 0-1 4.76 38.11 38.11 0 0 0 .49 5.18zM383.75 58.48a8.51 8.51 0 0 1 6.45 2.88 9.4 9.4 0 0 1 2.66 6.64 9.55 9.55 0 0 1-2.67 6.77 8.82 8.82 0 0 1-12.88 0 9.81 9.81 0 0 1-.05-13.44 8.55 8.55 0 0 1 6.49-2.88M394.8 68a11.35 11.35 0 0 0-3.23-8.13 10.46 10.46 0 0 0-7.82-3.37 10.64 10.64 0 0 0-7.61 3.12A11.2 11.2 0 0 0 372.7 68a11.38 11.38 0 0 0 3.19 8.18 10.9 10.9 0 0 0 15.6.07A11.29 11.29 0 0 0 394.8 68m-9.05-2.39a1.75 1.75 0 0 1-.64 1.51 2.82 2.82 0 0 1-1.75.47h-1.24v-3.67h.77a5.26 5.26 0 0 1 1.86.26 1.45 1.45 0 0 1 1 1.45m-3.63 8.79V69.9h1.37a3.54 3.54 0 0 1 1.1.2 1.52 1.52 0 0 1 .9.94 6.22 6.22 0 0 1 .21 1.56 9.43 9.43 0 0 0 .2 1.77h3.1l-.11-.37a1.53 1.53 0 0 1-.08-.37 2.31 2.31 0 0 1 0-.37v-1.09a3.54 3.54 0 0 0-1.08-2.86 4.16 4.16 0 0 0-1.74-.74 3.84 3.84 0 0 0 2.12-.85 2.84 2.84 0 0 0 .86-2.32 3.25 3.25 0 0 0-1.63-3.05 5.72 5.72 0 0 0-2.42-.65h-5.93v12.72z" transform="translate(-5.2 -5.13)"/></g></svg></a>
    </div><!-- .site-branding -->

    <nav id="site-navigation" class="main-navigation nav-bar">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>

    </div>
    </nav><!-- #site-navigation -->

              <div class="mobile-menu"><a class="dropdown-link">&#9776;</a>
  <div class="menu-wrapper">
<?php
        wp_nav_menu( array(
          'theme_location'  => 'main-navigation',
        ) );
      ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $(".mobile-menu").on('click', function() {
    $(".menu-wrapper").toggleClass("open");
  });
});
</script>
</div><!-- #mobile-nav -->

  </header><!-- #masthead -->
  </div>

  <div id="content" class="site-content">
