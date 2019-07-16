<template>
    <div class="ad">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 d-flex align-items-center">
                    <div class="mr-4">
                        <img class="ad-image" :src="ad.image" :alt="ad.title">
                        <img :src="ad.pixel" v-if="ad.pixel">
                    </div>
                    <p class="ad-description align-self-center">
                        <a class="ad-statlink" :href="ad.statlink">
                            <strong v-text="ad.title"></strong>
                            <span v-text="ad.description"></span>
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                loaded: false,
                ad: {
                    title: '',
                    description: '',
                    image: '',
                    pixel: false,
                    statlink: ''
                }
            }
        },

        created() {
            // TODO: go with axios
            $.ajax({
                url: 'http://srv.buysellads.com/ads/CVADC53U.json',
                dataType: 'jsonp',

                success: response => {
                    this.loaded = true;
                    this.ad = response.ads[0];
                }
            })
        }
    }
</script>

<style scoped>
    .ad {
        background: grey;
        color: white;
        padding: 1em 0;
    }

    .ad-image {
        width: 30px;
        height: 30px;
    }

    .ad-statlink {
        color: white;
        text-decoration: none;
    }
</style>
