<template>
	<div class="ssbox">
		<item title="首页" mark='home' :sel="selector" @send="getValue">
			<img slot="normal" src="static/images/ic_tab_home_normal.png"/>
			<img slot="active" src="static/images/ic_tab_home_active.png"/>
		</item>
		<item title="房源" mark='book' :sel="selector" @send="getValue">
			<img slot="normal" src="static/images/ic_keyboard_normal.png"/>
			<img slot="active" src="static/images/ic_keyboard_pressed.png"/>
		</item>
		<item title="发布" mark='group' :sel="selector" @send="getValue">
			<img slot="normal" src="static/images/ic_send_disabled.png"/>
			<img slot="active" src="static/images/ic_send_focused.png"/>
		</item>
		<item title="拼友说" mark='backCast' :sel="selector" @send="getValue">
			<img slot="normal" src="static/images/ic_tab_status_normal.png"/>
			<img slot="active" src="static/images/ic_tab_status_active.png"/>
		</item>
		
		<item title="我的" mark='personal' :sel="selector" @send="getValue">
			<img slot="normal" src="static/images/ic_tab_profile_female_normal.png"/>
			<img slot="active" src="static/images/ic_tab_profile_female_active.png"/>
		</item>
	</div>
</template>

<script>
	import item from './tabbarChild'
	export default{
				data:function(){
					return {
						selector:this.mark
					}
				},
				methods:{
					getValue:function(val){
						this.selector=val;
					}
				},
				components:{
					item
				}
	}
</script>

<style>
	ul{list-style: none;}
	.ssbox{height:0.64rem;width:100% ;margin: 0 auto;position: relative;background: #f6f6f6;border-top:1px solid #b5b5b5;position: fixed;bottom: 0;left: 0;}
	.ssbox>div{width: 20%;float: left;text-align: center;font-size: 0;height: ;}
	.ssbox img{width:0.4rem}
	.ssbox .title{font-size:0.14rem;color: #b5b5b5;}
	.ssbox .active{color: #42bf55;}
</style>