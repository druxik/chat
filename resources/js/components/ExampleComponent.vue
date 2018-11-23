<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body" @click="allo">
                        I'm an example component.{{test}}11112
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data : function () {
            return {
                test : "Y"
            }
        },
        methods : {
            allo : function () {
                alert()
            }
        }
    }
</script>
