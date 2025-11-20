# 🌍 City Navigator — API de Cidades e Pontos Turísticos

Bem-vindo ao **City Navigator**, uma API completa para gerenciamento de **cidades**, **pontos turísticos**, **categorias**, **avaliações de usuários** e várias funcionalidades extras pensadas para evoluir o projeto no futuro.

Este sistema foi projetado para ser modular, escalável e pronto para integrar recursos avançados — como IA e até funcionalidades sociais.

---

## 🧠 Objetivo Principal

Criar uma plataforma onde:

- **Administradores** podem cadastrar:
  - Cidades
  - Pontos turísticos
  - Categorias (ex: Museu, Igreja, Parque, Monumento)
  - Destaques de cidades
  - Fotos e informações complementares

- **Usuários comuns** podem:
  - Avaliar pontos turísticos  
  - Curtir reviews  
  - Marcar locais visitados  
  - Favoritar cidades  
  - Consultar informações completas sobre cidades e atrações  

A API é focada em organizar, filtrar e recomendar pontos turísticos de forma eficiente.

---

## 📌 Funcionalidades Essenciais

### 👤 Usuários
- Cadastro e autenticação  
- Função `role` (user / admin)  
- Listagem de favoritos  
- Histórico de locais visitados  
- Interação com reviews (likes)

---

### 🏙️ Cidades
- Nome, país, descrição e imagem  
- Média de avaliações  
- Destaques (`city_highlights`)  
- Pontos turísticos relacionados  
- Fotos anexadas  

---

### 📍 Pontos Turísticos
- Nome, descrição, coordenadas  
- Relacionamento com cidades  
- Categorias (museu, igreja, parque, etc)  
- Avaliações (reviews)  
- Fotos adicionais  
- Informações complementares  

---

### ⭐ Avaliações (Reviews)
- Usuário + ponto turístico  
- Comentário  
- Nota (rating)  
- Likes em avaliações  
- Possibilidade futura de ranqueamento por relevância  

---

### ❤️ Favoritos
- Usuários podem favoritar cidades  
- Endpoint simples e rápido para listagem  

---

### 🧭 Locais Visitados
- Usuário pode registrar quando visitou um ponto  
- Pode adicionar uma nota pessoal  
- Pode anexar uma foto da visita  

---

### 🗂️ Categorias
- Ex.: Museu, Igreja, Monumento, Parque  
- Atribuídas a pontos turísticos via tabela pivot `spot_categories`

---

## 🔥 Funcionalidades Extras Planejadas (Futuro)

### 🟦 1. Sistema Social (Estilo Rede Social)
- Usuários podem adicionar amigos  
- Feed mostrando:
  - Pontos turísticos que amigos visitaram  
  - Avaliações que amigos curtiram  
  - Cidades favoritas dos amigos  

Isso transforma o app em uma espécie de **TripAdvisor + rede social de viagens**.

---

### 🟦 2. Sistema de Chat
- Chat 1:1 entre usuários  
- Possibilidade de:
  - Enviar pontos turísticos no chat  
  - Conversar sobre locais  
  - Criar conversas temáticas (ex: viagem para Itália)

---

### 🟦 3. Sistema de IA (LangChain ou similar)
No futuro, você pode integrar:

- **Assistente de viagens**  
  → IA responde dúvidas sobre cidades e pontos turísticos  

- **Roteiros inteligentes**  
  → IA monta o melhor roteiro com base em:
  - Dias disponíveis  
  - Tipo de viagem  
  - Perfil do usuário  

- **Recomendações personalizadas**  
  → IA recomenda cidades, pontos, categorias e até viagens completas  

---

## 🗄️ Modelo de Dados (ERD)

### **users**
- id  
- name  
- email  
- password  
- role  
- created_at  
- updated_at  

### **cities**
- id  
- name  
- country  
- description  
- image_url  
- average_rating  
- created_at  
- updated_at  

### **tourist_spots**
- id  
- city_id → cities.id  
- name  
- description  
- latitude  
- longitude  
- created_at  
- updated_at  

### **categories**
- id  
- name  
- description  
- created_at  
- updated_at  

### **spot_categories (pivot)**
- id  
- tourist_spot_id → tourist_spots.id  
- category_id → categories.id  
- created_at  
- updated_at  

### **reviews**
- id  
- user_id → users.id  
- tourist_spot_id → tourist_spots.id  
- comment  
- rating  
- created_at  
- updated_at  

### **reviews_likes**
- id  
- review_id → reviews.id  
- user_id → users.id  
- created_at  
- updated_at  

### **favorites**
- id  
- user_id → users.id  
- city_id → cities.id  
- created_at  
- updated_at  

### **visited_spots**
- id  
- user_id → users.id  
- tourist_spot_id → tourist_spots.id  
- visited_at  
- note  
- photo_url  
- created_at  
- updated_at  

### **photos**
- id  
- city_id → cities.id  
- tourist_spot_id → tourist_spots.id  
- image_url  
- caption  
- created_at  
- updated_at  

### **city_highlights**
- id  
- city_id → cities.id  
- key  
- value  
- created_at  
- updated_at  

---

## 🔗 Resumo dos Relacionamentos

- **Users**
  - tem muitos:
    - favorites
    - reviews  
    - reviews_likes  
    - visited_spots  

- **Cities**
  - tem muitos:
    - tourist_spots  
    - favorites  
    - city_highlights  
    - photos  

- **Tourist Spots**
  - tem muitos:
    - reviews  
    - photos  
    - visited_spots  
  - pertence à cidade  
  - pertence a várias categorias  

- **Reviews**
  - tem muitos likes  

- **Categories**
  - pertence a muitos pontos turísticos via pivot  

---

## 🚀 Possibilidades Futuras

- Gamificação (badges por locais visitados)
- Sistema de ranking por cidade
- Algoritmo de recomendações estilo TikTok
- IA integrada consultando direto o banco
- Timeline de viagens do usuário

---

## 🏁 Conclusão

Este projeto tem uma base sólida para:

- Gerenciar cidades e pontos turísticos  
- Incentivar interação entre usuários  
- Evoluir para uma plataforma completa de viagens  
- Integrar IA e funcionalidades sociais no futuro  
