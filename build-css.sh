#!/bin/bash

# TailwindCSS Build Script
# This script ensures CSS is built properly despite the kqueue error

echo "Building TailwindCSS..."

# Run the TailwindCSS binary directly to avoid the Laravel wrapper issues
./tailwindcss --input resources/css/app.css --output public/dist/css/app.css

if [ -f "public/dist/css/app.css" ]; then
    echo "✅ CSS file generated successfully ($(wc -l < public/dist/css/app.css) lines)"
else
    echo "❌ CSS file generation failed"
    exit 1
fi
