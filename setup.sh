#!/usr/bin/env bash
set -e

GREEN='\033[0;32m'
BLUE='\033[0;34m'
YELLOW='\033[1;33m'
RED='\033[0;31m'
NC='\033[0m'

echo ""
echo -e "${BLUE}========================================${NC}"
echo -e "${BLUE}   Laravel 11 + Jetstream — Setup       ${NC}"
echo -e "${BLUE}========================================${NC}"
echo ""

command -v php  &>/dev/null || { echo -e "${RED}❌ PHP requis (8.2+)${NC}"; exit 1; }
command -v composer &>/dev/null || { echo -e "${RED}❌ Composer requis${NC}"; exit 1; }
command -v node &>/dev/null || { echo -e "${RED}❌ Node.js requis (18+)${NC}"; exit 1; }

echo -e "${GREEN}✔ PHP $(php -r 'echo PHP_VERSION;') · Composer $(composer --version --no-ansi | awk '{print $3}') · Node $(node -v)${NC}"
echo ""

echo -e "${YELLOW}[1/7] Dépendances PHP (composer install)...${NC}"
composer install --no-interaction --prefer-dist --optimize-autoloader

echo -e "${YELLOW}[2/7] Fichier .env...${NC}"
[ ! -f .env ] && cp .env.example .env

echo -e "${YELLOW}[3/7] Clé applicative...${NC}"
php artisan key:generate --ansi

echo -e "${YELLOW}[4/7] Base de données SQLite...${NC}"
[ ! -f database/database.sqlite ] && touch database/database.sqlite

echo -e "${YELLOW}[5/7] Migrations...${NC}"
php artisan migrate --force

echo -e "${YELLOW}[6/7] Dépendances Node (npm install)...${NC}"
npm install

echo -e "${YELLOW}[7/7] Compilation assets (Vite + Tailwind)...${NC}"
npm run build

echo ""
echo -e "${BLUE}========================================${NC}"
echo -e "${GREEN}  ✅ Installation terminée avec succès !${NC}"
echo -e "${BLUE}========================================${NC}"
echo ""
echo -e "  Lancez :  ${YELLOW}php artisan serve${NC}"
echo -e "  Ouvrez :  ${BLUE}http://localhost:8000${NC}"
echo ""
