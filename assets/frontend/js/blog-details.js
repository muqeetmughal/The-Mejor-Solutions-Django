


var comments_module = Vue.createApp({
    el: "#comments",
    delimiters: ['[[', ']]'],
    data() {
        return {
            comments: [],
            loading: false,

        }




    },
    methods: {
        loadComments() {
            axios.get("/api/listcomments")
                .then(resp => {
                    this.comments = resp.data
                }).catch(err => {
                    console.log(err)
                })
        }
    },
    created: function () {
        this.loadComments()
        // const daysjs = require("dayjs")
    }
})

comments_module.mount('#comments')