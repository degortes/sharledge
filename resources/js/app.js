require('./bootstrap');

var app = new Vue({
    el: '#root',
    data: {
        hello: 'Hello World'
    },
    methods: {
        log() {
            console.log('here')
        }
    },
    mounted() {
        this.log();
    }
});
