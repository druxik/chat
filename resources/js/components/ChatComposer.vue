<template lang="html">
    <div class="chat-composer">
        <input type="text" placeholder="Start typing your message..." v-model="messageText" v-on:keydown.enter="sendMessage"/>
        <button class="btn btn-primary" @click="sendMessage">Submit</button>
    </div>
</template>

<script>
    export default {
        name : "ChatComposer",
        data : function () {
            return {
                messageText : ''
            }
        },
        methods : {
            sendMessage : function()
            {
                this.$emit("messagesent", {
                    message : this.messageText,
                    user  : {
                        name: $('#navbarDropdown').text()
                    }
                });
                this.messageText = '';
            }
        },
    }
</script>

<style scoped>
    .chat-composer
    {
        display: flex;
    }
    .chat-composer input
    {
        flex: 1 auto;
    }
    .chat-composer button
    {
        border-radius: 0;
    }
</style>