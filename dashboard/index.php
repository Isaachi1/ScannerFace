<?php session_start(); if(!isset($_SESSION['user_id'])){header('Location: /');}?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="../favicon.ico" rel="icon" type="image/x-icon">
    <link href="../favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto|Ubuntu|Material+Icons'>
    <link rel="stylesheet" href="//unpkg.com/vuetify/dist/vuetify.min.css">
    <link rel="stylesheet" href="css/tema.css">
    <script src="//unpkg.com/vue"></script>
    <script src="//unpkg.com/vuetify"></script>
</head>
<body>
  <div id="app">
    <v-app toolbar>
      <v-navigation-drawer fixed persistent light class="navigation-drawer--mini-variant" v-model="drawer" overflow>
        <v-toolbar flat class="transparent">
          <v-list class="pa-0">
            <v-list-tile avatar tag="div">
              <v-list-tile-avatar>
                <img src="<?php echo $_SESSION['user_picture'];?>" />
              </v-list-tile-avatar>
              <v-list-tile-content>
                <v-list-tile-title><?php echo $_SESSION['user_name'];?></v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
          </v-list>
        </v-toolbar>
        <v-list dense>
          <hr>
          <v-list-tile v-for="item in menu" :key="item.name" :href="item.url">
            <v-list-tile-action>
              <v-icon>{{ item.icon }}</v-icon>
            </v-list-tile-action>
            <v-list-tile-content>
              <v-list-tile-title>{{ item.name }}</v-list-tile-title>
            </v-list-tile-content>
          </v-list-tile>
        </v-list>
      </v-navigation-drawer>
      <v-toolbar fixed class="blue darken-4" dark>
        <span v-show="devW < 720">
          <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
        </span>
        <v-toolbar-title>{{ title }}</v-toolbar-title>
        <v-spacer></v-spacer>
      </v-toolbar>
      <main>
        <v-container fluid>
          <v-layout row wrap>
            <v-flex xs12 sm4>
              <v-card dark class="ma-3" v-for="card in cards[0]" :key="card.name">
                <v-card-title class="blue darken-2">
                  <h4 class="headline mb-0"><v-icon dark>{{ card.icon }}</v-icon> <small>{{ card.title }}</small></h4>
                </v-card-title>
                <v-list dense v-for="link in card.url" :key="link.url">
                  <v-list-tile avatar :href="link.url">
                      <v-list-tile-avatar>
                        <img :src="link.image">
                      </v-list-tile-avatar>
                    <v-list-tile-content>
                      <v-list-tile-title>
                        {{ link.name }}
                      </v-list-tile-title>
                    </v-list-tile-content>
                  </v-list-tile>
                </v-list>
              </v-card>
            </v-flex>
            <v-flex xs12 sm4>
              <v-card class="ma-3" v-for="user in FbUser" :key="user.nome">
                <v-card-media :src="user.capa" height="200px">
                  <v-avatar class="avatar2">
                    <img :src="user.foto">
                  </v-avatar>
                </v-card-media>
                <v-card-title primary-title>
                  <div style="width: 100%;">
                    <h3 class="headline text-xs-center">{{ user.nome }}</h3>
                    <v-spacer></v-spacer>
                    <span>ID: {{ user.id }}</span>
                    <br>
                    <span>Email: {{ user.sexo }}</span>
                    <br>
                    <span>Sexo: {{ user.sexo }}</span>
                    <br>
                    <span>Local: {{ user.sexo }}</span>
                    <br><br>
                    <hr>
                    <v-btn outline large block :href="user.url" class="blue--text">Acessar o Perfil</v-btn>
                  </div>
                </v-card-title>
              </v-card>
              <v-card dark class="ma-3" v-for="card in cards[1]" :key="card.name">
                <v-card-title class="blue darken-2">
                  <h4 class="headline mb-0"><v-icon dark>{{ card.icon }}</v-icon> <small>{{ card.title }}</small></h4>
                </v-card-title>
                <v-list dense v-for="link in card.url" :key="link.url">
                  <v-list-tile avatar :href="link.url">
                    <v-list-tile-avatar>
                      <img :src="link.image">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                      <v-list-tile-title>
                        {{ link.name }}
                      </v-list-tile-title>
                    </v-list-tile-content>
                  </v-list-tile>
              </v-card>
            </v-flex>
            <v-flex xs12 sm4>
              <v-card dark class="ma-3" v-for="card in cards[2]" :key="card.name">
                <v-card-title class="blue darken-2">
                  <h4 class="headline mb-0"><v-icon dark>{{ card.icon }}</v-icon> <small>{{ card.title }}</small></h4>
                </v-card-title>
                <v-list dense v-for="link in card.url" :key="link.url">
                  <v-list-tile avatar :href="link.url">
                    <v-list-tile-avatar>
                      <img :src="link.image">
                    </v-list-tile-avatar>
                    <v-list-tile-content>
                      <v-list-tile-title>
                        {{ link.name }}
                      </v-list-tile-title>
                    </v-list-tile-content>
                  </v-list-tile>
              </v-card>
            </v-flex>
          </v-layout>
        </v-container>
      </main>
    </v-app>
  </div>
  <script src="js/app.js"></script>
</body>
</html>