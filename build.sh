#!/usr/bin/env bash

mkdir -p ./build/lib/bugsnag-php

echo "- Installing dependencies"
composer install

echo "- Copying plugin files"
cp -r README.md src/app LICENSE.txt build

echo "- Copying vendored bugsnag-php"
cp -r vendor/bugsnag/bugsnag/src/Bugsnag/* ./build/lib/bugsnag-php
