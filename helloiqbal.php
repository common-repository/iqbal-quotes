<?php

/*
Plugin Name: Hello Iqbal
Plugin URI: 
Description: This is not a plugin . This shows iqbal quotes on every wordpress admin screen. Allama IQbal SHAIR-e-MASHRIQ.
Author: Tehseen Ahmed
Version: 1.0
*/
class HelloIqbal {
	public function __construct()
	{
		add_action( 'admin_notices', array( $this, 'hello_iqbal' ) );
	}

	function hello_iqbal() {
		echo ( '<p class="iqbalquote"><em><h3>' .
		$this->get_a_quote() .
		' ~ Allama Iqbal</h3></em></p>' );
	}

	function get_a_quote() {
		$quotes="Kisi Ne Allama Iqbal Se Pocha: K Aqal Ki Inteha Kya Hai Ap Ny Jawaab Diya: “Hairaat” Phir Pocha Gya: Hairaat Ki Intiha.
		Khol Ankh Zameen Dekh, Falak Dekh Fizza Dekh Mashriq Sy Ubharty Hue Suraaj Ko Zaara Dekh Tashreeee: Iss Shair Mein Iqbal Kehte Hain K, “Subah Bakhair”.
		Na Thi Jb Apny Haal Ki Khabaar, Dekhty Rahy Logoon Ky Aib-O-Hunaar, Pari Jab Apne Gunahon Par Nazar, Tu Nigaah Mein Koi Or Buraa Na Raha…!!!.
		Nahi ha naa umeed Iqbal apni kasht-e-viran se Zara nam ho to ye mattti baht zarkhez hai saqi.
		Kis mein himat hy hamari parwaz mein laye kami Hum paron sy nahi hoslon sy ura karty hain.
		Ek Hi dar Pe sar ho to sajdon mein sakon milta hy Bhatak jate han wo log jin k hazaron KHUDA hote Han.
		Rooh_E_Iqbal Main ne kuch khawab tumhare liye dekhe they miaan, Mere un khawbon ka kuch mol na paya tum ne, Main ne socha tha k shaheen bano gay pyaro Cheel kawoon sey ha yarana lagaya tum ne.
		Ki Muhammad sy wafa to ne to hum tere han Ye jahan cheez hy kya Loh_o_Qalam tere han. 
		Sajdon k iwiz Fardos miley ye baat mujhe manzoor nahi B-los Ibadat karta hoon Banda hoon tera Mazdoor nhi.
		Dil Main KHUDA ka Hona Lazim Hai, *”* IQBAL *”* *”* Sajdon Main Parry Rehne Sy JANAT nHI milti.
		Na Thi Jab Apny Haal Ki Khabar Dekhty Rahey Logon K Aib-o-Hunar Parri Jab Apnay Gunahoon Par Nazar To Nigah Mein Koi Aur Bura Na Raha.";
	$quotes = explode( "\n", $quotes );
	$quote  = $quotes[ mt_rand( 0, count ( $quotes ) - 1 ) ];
	return ( wptexturize( $quote ) );
	}
}

$HelloIqbal = new HelloIqbal();


