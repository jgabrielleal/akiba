#!/bin/bash

# Diretório onde está este script (ex: .../scripts/)
BASEDIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"

# Sobe um nível (remover o "/scripts")
PROJECTDIR="$(dirname "$BASEDIR")"

# Roda o sass --watch
sass --watch "$PROJECTDIR/public/css/panel.scss:$PROJECTDIR/public/css/panel.css"
