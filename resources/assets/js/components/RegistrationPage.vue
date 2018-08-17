<script>
    export default {
        props: [
            'startAt',
            'endAt'
        ],

        data() {
            return {
                startAtModel: new Date(this.startAt),
                endAtModel: new Date(this.endAt),
                maxDate: new Date('2099')
            }
        }
    }
</script>