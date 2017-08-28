new Vue({
    el: "#app",
    data: function(){
        return{
            title: "ScannerFace",
            drawer: null,
            menu: [
                {
                    icon: "home",
                    name: "Home",
                    url: "/",
                },
                {
                    icon: "phone",
                    name: "Contato",
                    url: "#contato",
                },
                {
                    icon: "gamepad",
                    name: "Tutorial",
                    url: "#tutorial",
                },
                {
                    icon: "settings",
                    name: "Painel",
                    url: "./dashboard"
                }
            ],
            mini: false,
            right: null,
            devW: document.body.clientWidth
        }
    },
    mounted: function(){
        const self = this;
        document.title = self.title;
        window.addEventListener("resize", function(){
            self.devW = document.body.clientWidth;
        });
    }
});