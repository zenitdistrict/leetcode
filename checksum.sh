#!/bin/bash

find . -type f | xargs -d '\n' sha256sum > test.txt
