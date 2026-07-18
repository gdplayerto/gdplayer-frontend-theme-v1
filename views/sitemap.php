<?php

/*
 * File: sitemap.php
 * Project: GDPlayer
 * File Created: Sunday, 6th August 2023 12:41:20 pm
 * Author: GDPlayer Developer (https://t.me/gdplayerto)
 * -----
 * Last Modified: Friday, 3rd July 2026 1:10:06 am
 * Modified By: GDPlayer Developer (https://t.me/gdplayerto>)
 * -----
 * Copyright 2020 - 2025 https://github.com/gdplayerto
 */

declare(strict_types=1);

session_write_close();

header('Content-Type: application/xml; charset=UTF-8');
createResponseHeaders(corsResponseHeaders(true));

$baseUrl = BASE_URL;

echo <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
    http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
    <url>
        <loc>{$baseUrl}</loc>
        <lastmod>2021-11-19T07:47:44+00:00</lastmod>
        <priority>1.00</priority>
    </url>
    <url>
        <loc>{$baseUrl}buy/</loc>
        <lastmod>2026-07-02T17:00:00+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{$baseUrl}buy-additional-features/</loc>
        <lastmod>2026-07-02T17:00:00+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{$baseUrl}sharer/</loc>
        <lastmod>2021-11-19T07:47:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{$baseUrl}changelog/</loc>
        <lastmod>2021-11-19T07:47:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{$baseUrl}terms/</loc>
        <lastmod>2021-11-19T07:47:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
    <url>
        <loc>{$baseUrl}privacy/</loc>
        <lastmod>2021-11-19T07:47:44+00:00</lastmod>
        <priority>0.80</priority>
    </url>
</urlset>
XML;
