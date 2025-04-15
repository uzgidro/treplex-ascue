# Шаг 1: Сборка приложения
FROM node:22.13.1-alpine AS builder

WORKDIR /app

# Устанавливаем зависимости
COPY package*.json ./
RUN npm install

# Копируем исходники
COPY . .

# Билдим проект
RUN npm run build

# Шаг 2: Продакшн-окружение
FROM node:22.13.1-alpine

WORKDIR /app

# Устанавливаем только прод-зависимости
COPY package*.json ./
RUN npm install --only=production

# Копируем билд
COPY --from=builder /app/dist ./dist

# Открываем порт
EXPOSE 3000

CMD ["node", "dist/main"]