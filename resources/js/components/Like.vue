<template>
    <button v-if="!liked" class="cp_btn mb-3" @click="like(toiletId)">いいね{{ likeCount }}</button>
    <button v-else class="cp_btn mb-3" @click="unlike(toiletId)">いいね済{{ likeCount }}</button>
</template>

<script>
    export default {

        props: ['toiletId', 'userId', 'countLikes', 'countLiked'],
        data(){
            return{
                liked: false,
                likeCount: 0,
            };
        },
        created(){
            this.liked = this.countLikes      
            this.likeCount = this.countLiked      
        },
        methods: {
            like(toiletId){
                let url = `/api/toilet/${toiletId}/like`

                axios.post(url, {
                    user_id: this.userId,
                    toilet_id: this.toiletId
                })
                .then(response =>{
                    this.liked = true
                    this.likeCount = response.data.likeCount
                })
                .catch(error =>{
                    alert(error)
                })
            },
            unlike(toiletId){
                let url = `/api/toilet/${toiletId}/unlike`

                axios.post(url, {
                    user_id: this.userId,
                    toilet_id: this.toiletId
                })
                .then(response =>{
                    this.liked = false
                    this.likeCount = response.data.likeCount

                })
                .catch(error =>{
                    alert(error)
                })
            },
        }
    }
</script>