<?php
if (!isset($accessToken)) {
  if ($helper->getError()) {
    header('HTTP/1.0 401 Unauthorized');
    echo "Error: " . $helper->getError() . "\n";
    echo "Error Code: " . $helper->getErrorCode() . "\n";
    echo "Error Reason: " . $helper->getErrorReason() . "\n";
    echo "Error Description: " . $helper->getErrorDescription() . "\n";
  } else {
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto|Ubuntu|Material+Icons'>
    <link rel="stylesheet" href="//unpkg.com/vuetify/dist/vuetify.min.css">
    <link rel="stylesheet" href="css/tema.css">
    <script src="//unpkg.com/vue"></script>
    <script src="//unpkg.com/vuetify"></script>
</head>
<body>
    <div id="app">
        <v-app toolbar>
            <v-navigation-drawer temporary v-model="drawer" :mini-variant.sync="mini" light overflow absolute>
                <v-list class="pa-1">
                    <v-list-tile tag="div">
                        <v-list-tile-content>
                            <v-list-tile-title>{{ title }}</v-list-tile-title>
                        </v-list-tile-content>
                        <v-list-tile-action>
                            <v-btn icon dark @click.native.stop="mini = !mini">
                                <v-icon>chevron_left</v-icon>
                            </v-btn>
                        </v-list-tile-action>
                    </v-list-tile>
                </v-list>
                <v-list class="pt-0" dense>
                    <v-divider></v-divider>
                    <v-list-tile v-for="item in menu" :key="item.name">
                        <v-list-tile-action>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-tile-action>
                        <v-list-tile-content>
                            <v-list-tile-title>{{ item.name }}</v-list-tile-title>
                        </v-list-tile-content>
                    </v-list-tile>
                </v-list>
            </v-navigation-drawer>
            <v-toolbar absolute dark>
                <span v-show="devW < 720 "><v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon></span>
                <v-spacer></v-spacer>
                <v-toolbar-items v-for="item in menu" :key="item.name" class="hidden-sm-and-down">
                    <v-list-tile flat :href="item.url">
                        <v-list-tile-title>
                            <v-icon>{{ item.icon }}</v-icon> {{ item.name }}
                        </v-list-tile-title>
                    </v-list-tile>
                </v-toolbar-items>
            </v-toolbar>
            <main>
                <v-container>
                    <v-layout row wrap class="mt-4 mb-5 mt-5 pa-5">
                        <v-flex xs12 class="mb-3">
                            <h1 class="text-xs-center">{{ title }}</h1>
                            <v-alert error value="true" class="text-xs-center mt-5 mb-3">
                                <strong>Atenção</strong>: <small>esta ferramenta não viola as configurações de privacidade do Facebook.
                                Só mostra o conteúdo oculto ao qual você tem acesso.</small>
                            </v-alert>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <v-btn block :href="menu[2].url" large primary dark class="red darken-1">Vamos ao Tutorial?</v-btn>
                        </v-flex>
                        <v-flex xs12 sm6>
                            <v-btn block large primary dark class="blue darken-1" href="<?php echo $helper->getLoginUrl(UrlAtual(), $permissions);?>">Vamos Começar?</v-btn>
                        </v-flex>
                    </v-layout>
                    <v-layout row wrap dark elevation-10 id="cards" class="text-xs-justify white pa-5 mb-5">
                        <v-flex xs12 sm12 lg4>
                            <v-card class="ma-1">
                                <v-card-media>
                                    <img src="image/creditcard-128.png" class="ma-5" draggable="false" />
                                </v-card-media>
                                <v-card-title primary-title>
                                    <h5 class="text-xs-center">Sistem Grátis</h5>
                                </v-card-title>
                                <v-card-text>
                                    <p>Sistema gratis que oferece diverssos tipo de serviço para facebook.</p>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 sm12 lg4>
                            <v-card class="ma-1">
                                <v-card-media>
                                    <img src="image/locked-128.png" class="ma-5" draggable="false" />
                                </v-card-media>
                                <v-card-title primary-title>
                                    <h5 class="text-xs-center">Sistema 100% Seguro</h5>
                                </v-card-title>
                                <v-card-text>
                                    <p>Fique tranquilo, temos a melhor segurança em espionagem para que você possa Stalkear
                                        aquela pessoa que você tanto prefere. Tudo 100% seguro, livre de rastros.</p>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 sm12 lg4>
                            <v-card class="ma-1">
                                <v-card-media>
                                    <img src="image/globe-128.png" class="ma-5" draggable="false" />
                                </v-card-media>
                                <v-card-title primary-title>
                                    <h5 class="text-xs-center">Sistema Brasileiro</h5>
                                </v-card-title>
                                <v-card-text>
                                    <p>Nosso sistema e totalmente brasileiro, desenvolvido para vocês com muito carinho.</p>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 sm12 lg4>
                            <v-card class="ma-1">
                                <v-card-media>
                                    <img src="image/magnifyingglass-128.png" class="ma-5" draggable="false" />
                                </v-card-media>
                                <v-card-title primary-title>
                                    <h5 class="text-xs-center">Mecanismo de Busca</h5>
                                </v-card-title>
                                <v-card-text>
                                    <p>Temos um mecanismo de busca de alta qualidade, desenvolvido para você Stalker. Não perca
                                        tempo ao esperar achar as informações daquela pessoa que você tanto deseja.</p>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 sm12 lg4>
                            <v-card class="ma-1">
                                <v-card-media>
                                    <img src="image/cart-128.png" class="ma-5" draggable="false" />
                                </v-card-media>
                                <v-card-title primary-title>
                                    <h5 class="text-xs-center">Sistema de Compras</h5>
                                </v-card-title>
                                <v-card-text>
                                    <p>Nosso sistema de compras 100% seguro para você Stalker, não tenha medo ao contratar os
                                        nossos planos.
                                    </p>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                        <v-flex xs12 sm12 lg4>
                            <v-card class="ma-1">
                                <v-card-media>
                                    <img src="image/interstate-128.png" class="ma-5" draggable="false" />
                                </v-card-media>
                                <v-card-title primary-title>
                                    <h5 class="text-xs-center">SITE SEGURO</h5>
                                </v-card-title>
                                <v-card-text>
                                    <p>Nosso Fique tranquilo temos a melhor segurança para você.</p>
                                </v-card-text>
                            </v-card>
                        </v-flex>
                    </v-layout>
                    <v-layout id="contato" dark elevation-3 class="text-xs-justify white pa-4 mb-5">
                        <v-flex xs12>
                            <v-card-text>
                                <h4>Contato</h4>
                                <v-divider class="mb-5"></v-divider>
                                <v-text-field label="Nome" persistent-hint required></v-text-field>
                                <v-text-field label="Email" persistent-hint required></v-text-field>
                                <v-text-field label="Descreva a sua dúvida" persistent-hint textarea required></v-text-field>
                                <small>*campos obrigatórios</small>
                                <v-btn primary large dark class="right">Enviar &nbsp;
                                    <v-icon>send</v-icon>
                                </v-btn>
                            </v-card-text>
                        </v-flex>
                    </v-layout>
                    <v-layout id="tutorial" dark elevation-3 class="text-xs-justify white pa-4 mb-5">
                        <v-flex xs12>
                            <h4>Tutorial</h4>
                            <v-divider></v-divider>
                        </v-flex>
                    </v-layout>
                    <v-layout dark elevation-3 class="text-xs-justify white pa-4 mb-5">
                        <v-flex xs12>
                            AD
                        </v-flex>
                    </v-layout>
                    <v-footer class="pa-4" dark>
                        <div>© Copyright 2017. Todos os direitos reservados</div>
                        <v-spacer></v-spacer>
                        <div>Criador por: <a href="http://www.gitshowcase.com/isaachi1" target="blank">Isaac Henrique</a></div>
                    </v-footer>
                </v-container>
            </main>
        </v-app>
    </div>
    <script src="js/app.js"></script>
</body>

</html>
<?php
  }
  exit;
}
?>