# 📜 Leitor de XML - DANFE

Este projeto é um **leitor de arquivos XML** que exibe uma **DANFE (Documento Auxiliar da Nota Fiscal Eletrônica)** utilizando PHP. O sistema foi desenvolvido seguindo a arquitetura de software **MVC (Model-View-Controller)** e utiliza a biblioteca **Nfephp** para facilitar a manipulação dos dados da nota fiscal.

## ⚙️ Tecnologias e Conceitos Utilizados

- **PHP**: Linguagem de programação utilizada para o desenvolvimento do projeto.
- **Composer**: Gerenciador de dependências para PHP, utilizado para instalar e gerenciar as bibliotecas do projeto.
- **Autoload**: Mecanismo do Composer para carregar automaticamente as classes do projeto sem a necessidade de incluí-las manualmente.
- **Arquitetura MVC**: Organização do código em três partes principais:
  - **Model**: Lida com os dados e a lógica de negócio.
  - **View**: Responsável pela apresentação e interface do usuário.
  - **Controller**: Intermediário que processa as entradas do usuário e interage com o modelo para retornar a resposta adequada.
- **Nfephp**: Biblioteca que fornece ferramentas para manipulação de Notas Fiscais Eletrônicas (NF-e) em PHP.

1. **Pré-requisitos:**
    * PHP 8.0 ou superior
    * Composer
    * Servidor web (Apache, Nginx)



## 📦 Instalação

1. **Clone este repositório:**
   ```bash
   git clone https://github.com/seu-usuario/leitor-de-xml-danfe.git
   cd leitor-de-xml-danfe

2. **Instale as dependências:**
    ```bash
    composer install
    ```

3. **Incialize o composer:**
    ```bash
    composer init
    ```
4. **Em caso de erro: instale a biblioteca nfephp**
   ```bash
    composer require nfephp-org/sped-da 
    ```


**Licença:**
Este projeto está licenciado sob a MIT License.