<script>
    export default {
        props: ['addresses', 'routeGetCities'],
        data() {
            return {
                state: '',
                city: '',
                cities: []
            }
        },
        methods: {
            getCities() {
                axios.post(this.routeGetCities, {
                    state: this.state
                })
                .then((response) => {
                    this.cities = response.data.cities
                })
            },

            submit(ref) {
                this.$refs[ref].submit();
            }
        }
    }
</script>