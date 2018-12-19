<template>

    <div>

        <div class="container mx-auto text-center pb-20 md:pb-0 lg:pb-0 ">
            <button @click="moveToFront(index)" v-for="(platform, index) in platforms"
                    :class="{ 'bg-deep-blue': index === 0, 'bg-jade': index !== 0 }"
                    class="inline-block  px-5 py-2 text-xs font-bold rounded text-white mx-2 my-2">
                {{ platform.name }}
            </button>
        </div>


        <transition-group name="slide-fade">


            <div v-if="!hideForTransition" :key="index" v-for="(platform, index) in platforms"
                 :class="{
                            'bg-white': isEven(index),
                            'md:bg-blue-grey lg:bg-blue-grey': !isEven(index)
                          }" class="  md:py-20 lg:py-20">

                <div v-if="isEven(index)"
                     class="contest__platform-left container mx-auto flex flex-col md:flex-row lg:flex-row mt-10 mb-10">
                    <div class="w-full md:w-2/5 lg:2/5 mt-12 md:mt-0 lg:mt-0 rounded bg-white shadow-md">
                        <div class="w-full shadow-md bg-deep-blue rounded-t relative">
                            <div class="contest__structure-rewards-circle">
                                <p> {{ platform.available_points }} </p>
                                <p>{{ platform.points }}</p>
                            </div>
                            <p class="m-0 text-grey-lighter text-xl font-bold py-6 text-center"> {{
                                platform.rewards_title
                                }} </p>
                        </div>

                        <div class="px-10 py-8 rounded-b">
                            <p class="m-0 text-xs mb-2 "> {{ platform.how_to_earn_points }} </p>

                            <p v-if="platform.instruction_1 !== null && platform.instruction_1 !== ''" class="m-0 text-lg">
                                <i class="material-icons text-jade text-base pr-2">
                                    {{ platform.material_icon_1 }}
                                </i>
                                {{ platform.instruction_1 }}
                            </p>

                            <p v-if="platform.instruction_2 !== null && platform.instruction_2 !== ''" class="m-0 text-lg">
                                <i class="material-icons text-jade text-sm pr-2">
                                    {{ platform.material_icon_2 }}
                                </i>
                                {{ platform.instruction_2 }}
                            </p>

                            <p v-if="platform.instruction_3 !== null && platform.instruction_3 !== ''" class="m-0  text-lg">
                                <i class="material-icons text-jade text-sm pr-2">
                                    {{ platform.material_icon_3 }}
                                </i>
                                {{ platform.instruction_3 }}
                            </p>

                            <p class="m-0 text-xs mb-2 mt-10"> {{ platform.rewards_title }} </p>

                            <p class="m-0 text-lg "> {{ platform.rewards_description }} </p>

                        </div>
                    </div>

                    <div class="w-full md:w-3/5 lg:w-3/5 p-8 pl-8 md:p-10 md:pl-20 lg:p-10 lg:pl-20">

                        <h2 class="text-jade text-center md:text-left lg:text-left flex items-center">

                            <span class="platform-icon inline-block float-left mr-4 m-0 flex items-center justify-center rounded"
                                  v-html="platform.icon"></span>
                            <span class="inline-block">{{ platform.name }} </span>
                        </h2>

                        <p class="text-base"> {{ platform.subtitle }} </p>

                        <p class="text-xs font-bold "> {{ platform.guidelines_title }} </p>

                        <div class="text-xs" v-html="platform.guidelines">
                        
                        </div>
                    </div>

                </div>

                <!--Right aligned-->
                <div v-if="!isEven(index) "
                     class="contest__platform-right container mx-auto flex flex-col md:flex-row lg:flex-row mt-10 mb-10">

                    <div class="w-full md:w-3/5 lg:w-3/5 p-8 pl-8 md:p-10 md:pl-20 lg:p-10 lg:pl-20">

                        <!--Platform Title-->
                        <h2 class="text-jade text-center flex items-center md:text-left lg:text-left">
                            <span class="platform-icon inline-block float-left mr-4 m-0 flex items-center justify-center rounded"
                                  v-html="platform.icon"></span>
                            <span class="inline-block">{{ platform.name }} </span>
                        </h2>
                        <!--End of platform title-->


                        <p class="text-base"> {{ platform.subtitle }} </p>

                        <p class="text-xs font-bold "> {{ platform.guidelines_title }} </p>

                        <!-- Guidelines -->
                        <div class="text-xs" v-html="platform.guidelines">
                        
                        </div>
                        <!--End of Guidelines-->

                    </div>

                    <!--Rewards-->
                    <div class="w-full md:w-2/5 lg:2/5 mt-12 md:mt-0 lg:mt-0 rounded bg-white shadow-md">
                        <div class="w-full shadow-md bg-deep-blue rounded-t relative">
                            <div class="contest__structure-rewards-circle">
                                <p> {{ platform.available_points }} </p>
                                <p>{{ platform.points }}</p>
                            </div>
                            <p class="m-0 text-grey-lighter text-xl font-bold py-6 text-center">
                                {{ platform.rewards_title }}
                            </p>
                        </div>

                        <div class="px-10 py-8 rounded-b">
                            <p class="m-0 text-xs mb-2 "> {{ platform.how_to_earn_points }} </p>

                            <p v-if="platform.instruction_1 !== null && platform.instruction_1 !== ''" class="m-0 text-lg">
                                <i class="material-icons text-jade text-base pr-2">
                                    {{ platform.material_icon_1 }}
                                </i>
                                {{ platform.instruction_1 }}
                            </p>

                            <p v-if="platform.instruction_2 !== null && platform.instruction_2 !== ''" class="m-0 text-lg">
                                <i class="material-icons text-jade text-sm pr-2">
                                    {{ platform.material_icon_2 }}
                                </i>
                                {{ platform.instruction_2 }}
                            </p>

                            <p v-if="platform.instruction_3 !== null && platform.instruction_3 !== ''" class="m-0  text-lg">
                                <i class="material-icons text-jade text-sm pr-2">
                                    {{ platform.material_icon_3 }}
                                </i>
                                {{ platform.instruction_3 }}
                            </p>

                            <p class="m-0 text-xs mb-2 mt-10"> {{ platform.rewards_title }} </p>

                            <p class="m-0 text-lg "> {{ platform.rewards_description }} </p>

                        </div>
                    </div>
                    <!--End of rewards-->

                </div>
                <!--End of right aligned platform-->

            </div>


        </transition-group>
    </div>


</template>

<style lang="scss">

    .platform-icon {

        padding: 0px;
        width: 40px;
        height: 40px;

        & svg, & img {
            width: 100%;
            height: 100%;
        }
    }

    .slide-fade-enter-active {
        transition: all .8s ease;
    }

    .slide-fade-leave-active {
        transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);
    }

    .slide-fade-enter, .slide-fade-leave-to {
        transform: translateX(10px);
        opacity: 0;
    }
</style>

<script>
    export default {
        props: ['jsonPlatforms'],
        data() {
            return {
                platforms: [],
                hideForTransition: false,
            }
        },
        mounted() {
            if (typeof this.jsonPlatforms === 'string') {
                this.platforms = JSON.parse(this.jsonPlatforms);
            } else {
                let type = this.jsonPlatforms;
                this.platforms = this.jsonPlatforms.platforms;
            }
        },

        methods: {
            isEven(n) {
                return n % 2 == 0;
            },
            moveToFront(index) {
                if (index !== 0) {
                    this.hideForTransition = true;
                    this.platforms = this.arrayMove(this.platforms, index, 0);
                    setTimeout(() => {
                        this.hideForTransition = false;
                    }, 200)
                }

            },

            arrayMove(arr, old_index, new_index) {
                if (new_index >= arr.length) {
                    let k = new_index - arr.length + 1;
                    while (k--) {
                        arr.push(undefined);
                    }
                }
                arr.splice(new_index, 0, arr.splice(old_index, 1)[0]);
                return arr; // for testing
            }

        }
    }
</script>