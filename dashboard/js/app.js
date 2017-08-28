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
          nome: "aaaaaa",
          foto: "https://scontent.xx.fbcdn.net/v/t1.0-1/p200x200/20374373_1490010454413502_846902600263173972_n.jpg?oh=94f84ef7c73ee635772bce2d2490258f&oe=5A5F62B0",
          capa: "#aogkaogk",
          url: "/aofoakgag",
          sexo: "?"
        }
      ],
      cards: array_cols([
        {
          icon: "gamepad",
          title: "Oi",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi 2",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi 3",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi 4",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi 2",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi 3",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
            }
          ]
        },
        {
          icon: "gamepad",
          title: "Oi 4",
          url: [
            {
              name: "oakaokga",
              url: "#aokoakvoakvav"
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