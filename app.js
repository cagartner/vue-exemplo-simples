
const app = new Vue({
    el: '#app',
    data: {
        postcode: null,
        address: {}
    },
    methods: {
        searchAddress: function () {
            const self = this;
            if(/^[0-9]{5}-[0-9]{3}$/.test(this.postcode)) {
                axios.get('http://viacep.com.br/ws/'+this.postcode+'/json/').then(function (transport) {
                     self.address = transport.data;
                });
            }
        }
    }   
})