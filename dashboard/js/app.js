function array_cols(arry, qt){
  var ret = []
  , size = Math.ceil(arry.length / qt);
  if(qt == 1 || arry > 0) return [arry];
  for(var i = 0; i < qt; i++){
    var start = i * size;
    ret.push(arry.slice(start, start + size));
  }
  return ret;
}

new Vue({
  el: "#app",
  data: function () {
    return {
      title: "ScannerFace - Painel",
      drawer: true,
      mini: null,
      show: true,
      right: null,
      devW: document.body.clientWidth,
      menu: [
        {
          icon: "home",
          name: "Home",
          url: "/",
        },
        {
          icon: "settings",
          name: "Configurção",
          url: "#configuracao",
        },
        {
          icon: "power_settings_new",
          name: "Logout",
          url: "logout.php",
        }
      ],
      FbUser: [
        {
          icon: "user",
          title: "Perfil",
          id: "1021201092120",
          nome: "???? kkkkkkkkkkkkk",
          foto: "https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/20374373_1490010454413502_846902600263173972_n.jpg?oh=94f84ef7c73ee635772bce2d2490258f&oe=5A5F62B0",
          capa: "https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/20374373_1490010454413502_846902600263173972_n.jpg?oh=94f84ef7c73ee635772bce2d2490258f&oe=5A5F62B0",
          url: "/aofoakgag",
          sexo: "?"
        }
      ],
      cards: array_cols([
        {
          icon: "today",
          title: "Recentes",
          url: [
            {
              name: "Fotos",
              url: "#paogkpaokgag",
              image: "image/camera.png"
            },
            {
              name: "Fotos Marcadas",
              url: "#paogkpaokgag",
              image: "image/camera.png"
            },
            {
              name: "Fotos Comentadas",
              url: "#paogkpaokgag",
              image: "image/comments.png"
            },
            {
              name: "Fotos Curtidas",
              url: "#paogkpaokgag",
              image: "image/camera.png"
            },
            {
              name: "Histórias Comentadas",
              url: "#paogkpaokgag",
              image: "image/comments.png"
            },
            {
              name: "Histórias Curtidas",
              url: "#paogkpaokgag",
              image: "image/Usability_icon-icons.com_53759.png"
            },
            {
              name: "Páginas Curtidas",
              url: "#paogkpaokgag",
              image: "image/Usability_icon-icons.com_53759.png"
            },
            {
              name: "Grupos",
              url: "#paogkpaokgag",
              image: "image/groups.png"
            },
            {
              name: "Eventos",
              url: "#paogkpaokgag",
              image: "image/events.png"
            },
            {
              name: "Locais Visitados",
              url: "#paogkpaokgag",
              image: "image/location.png"
            }
          ]
        },
        {
          icon: "stars",
          title: "Interesses",
          url: [
            {
              name: "Páginas",
              url: "#aokoakvoakvav",
              image: "image/everything.png"
            },
            {
              name: "Partidos Politicos",
              url: "#aokoakvoakvav",
              image: "image/politics.png"
            },
            {
              name: "Religião",
              url: "#aokoakvoakvav",
              image: "image/camera.png"
            },
            {
              name: "Música",
              url: "#aokoakvoakvav",
              image: "image/music.png"
            },
            {
              name: "Filmes",
              url: "#aokoakvoakvav",
              image: "image/movies.png"
            },
            {
              name: "Livros",
              url: "#aokoakvoakvav",
              image: "image/book.png"
            },
            {
              name: "Locais",
              url: "#aokoakvoakvav",
              image: "image/location.png"
            }
          ]
        },
        {
          icon: "thumb_up",
          title: "Gostei",
          url: [
            {
              name: "Fotos",
              url: "#aokoakvoakvav",
              image: "image/camera.png"
            },
            {
              name: "Videos",
              url: "#aokoakvoakvav",
              image: "image/videos.png"
            },
            {
              name: "Publicações",
              url: "#aokoakvoakvav",
              image: "image/post.png"
            }
          ]
        },
        {
          icon: "chat",
          title: "Comentários",
          url: [
            {
              name: "Nas Fotos",
              url: "#aokoakvoakvav",
              image: "image/comments.png"
            }
          ]
        },
        {
          icon: "local_offer",
          title: "Tags",
          url: [
            {
              name: "Fotos",
              url: "#aokoakvoakvav",
              image: "image/camera.png"
            },
            {
              name: "Videos",
              url: "#aokoakvoakvav",
              image: "image/videos.png"
            },
            {
              name: "Publicações",
              url: "#aokoakvoakvav",
              image: "image/post.png"
            }
          ]
        },
        {
          icon: "face",
          title: "Pessoas",
          url: [
            {
              name: "Família",
              url: "#aokoakvoakvav",
              image: "image/family.png"
            },
            {
              name: "Amigos",
              url: "#aokoakvoakvav",
              image: "image/friends.png"
            },
            {
              name: "Amigos de Amigos",
              url: "#aokoakvoakvav",
              image: "image/friendsoffriends.png"
            },
            {
              name: "Colegas de Trabalho",
              url: "#aokoakvoakvav",
              image: "image/work.png"
            },
            {
              name: "Colegas de Classe",
              url: "#aokoakvoakvav",
              image: "image/education.png"
            },
            {
              name: "Locais",
              url: "#aokoakvoakvav",
              image: "image/map.png"
            }
          ]
        },
        {
          icon: "account_circle",
          title: "Perfil",
          url: [
            {
              name: "Fotos",
              url: "#aokoakvoakvav",
              image: "image/camera.png"
            },
            {
              name: "Videos",
              url: "#aokoakvoakvav",
              image: "image/videos.png"
            },
            {
              name: "Publicações",
              url: "#aokoakvoakvav",
              image: "image/post.png"
            },
            {
              name: "Grupos",
              url: "#aokoakvoakvav",
              image: "image/groups.png"
            },
            {
              name: "Eventos Futuros",
              url: "#aokoakvoakvav",
              image: "image/events.png"
            },
            {
              name: "Eventos Passados",
              url: "#aokoakvoakvav",
              image: "image/events.png"
            },
            {
              name: "Jogos",
              url: "#aokoakvoakvav",
              image: "image/game.png"
            },
            {
              name: "Aplicativos",
              url: "#aokoakvoakvav",
              image: "image/apps.png"
            }
          ]
        },
        {
          icon: "room",
          title: "Locais",
          url: [
            {
              name: "Todos",
              url: "#aokoakvoakvav",
              image: "image/everything.png"
            },
            {
              name: "Bares",
              url: "#aokoakvoakvav",
              image: "image/bars.png"
            },
            {
              name: "Restaurantes",
              url: "#aokoakvoakvav",
              image: "image/restaurants.png"
            },
            {
              name: "Lojas",
              url: "#aokoakvoakvav",
              image: "image/stores.png"
            },
            {
              name: "Ao Ar Livre",
              url: "#aokoakvoakvav",
              image: "image/outdoors.png"
            },
            {
              name: "Hoteis",
              url: "#aokoakvoakvav",
              image: "image/hotels.png"
            },
            {
              name: "Teatros",
              url: "#aokoakvoakvav",
              image: "image/theaters.png"
            }
          ]
        }
      ], 3),
    }
  },
  mounted: function () {
    const self = this;
    document.title = self.title;
    window.addEventListener("resize", function () {
      self.devW = document.body.clientWidth;
    });
  }
});