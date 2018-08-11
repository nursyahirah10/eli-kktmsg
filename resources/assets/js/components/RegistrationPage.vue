<script>
    export default {
        props: [
            'startAt',
            'endAt'
        ],

        data() {
            return {
                startAtModel: new Date(this.startAt),
                endAtModel: new Date(this.endAt)
            }
        }
    }
</script>