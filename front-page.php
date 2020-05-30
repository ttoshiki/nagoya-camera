<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nagoya-camera
 */

get_header();
?>

<div id="front_page" class="content-area">
	<main id="main" class="site-main">
		<section id="front_top">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/front-page_main.jpg" srcset="<?php bloginfo('template_directory'); ?>/img/front-page/front-page_main@2x.jpg" alt="名古屋防犯カメラ" class="front_top-frontimg">
			<div class="first-campaign">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/first_campaign.png" alt="初回限定特典">
				<span>他社様<span class="small">の</span>見積書<br class="md-br">ご提示<span class="small">で</span>値引き対応！</span>
			</div>
		</section>
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
		<section id="front_news" class="sec_container">
			<div class="front_news_box">
				<h1>最新情報</h1>
				<?php
                $news_query = new WP_Query(
    array(
                        'post_type'      => 'post',
                        'category_name' => 'news',
                        'posts_per_page' => 5,
                        'order' => 'DESC',
                    )
);
                ?>
				<?php if ($news_query->have_posts()) : ?>
					<?php while ($news_query->have_posts()) : ?>
						<?php $news_query->the_post();
                                $cat = get_the_category();
                                $cat_name = $cat[0]->name; ?>
						<div class="news_list">
							<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"></a>
							<div>
								<div class="d-flex flex-column flex-sm-row">
									<time class="mr-4" datetime="<?php the_time('Y-m-d') ?>"><?php echo get_the_date('Y 年 m 月 d 日'); ?></time>
									<div class="news_cat_name"><?php echo $cat_name; ?></div>
								</div>
							</div>
							<div class="news_title">
								<?php
                                        echo $post->post_title;
                                        // ----- 文字数制限をつけたい場合 -----
                                        // if (mb_strlen($post->post_title) > 40) {
                                        // 	$title = mb_substr($post->post_title, 0, 40);
                                        // 	echo $title . '...';
                                        // } else {
                                        // 	echo $post->post_title;
                                        //}
                                        ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<p>準備中です。</p>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</section>
		<section id="front_about" class="sec_container">
			<div class="about_nagoyacamera">
				"名古屋防犯カメラ"<span class="small_about">とは</span>
			</div>
			<div class="service_map_wrapper">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/service_map.png" srcset="<?php bloginfo('template_directory'); ?>/img/front-page/service_map@2x.png" alt="愛知県名古屋市を中心にサービスを展開" class="service_map">
			</div>
			<div class="service_triangle_wrapper">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/triangle.png" class="triangle">
			</div>
		</section>
		<section id="front_3point" class="sec_container">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/three_points.png" alt="名古屋防犯カメラが選ばれている3つのポイント">
			<!-- point 1 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_1.png" alt="消防・防災に関するあらゆるお困りごとを解決">
			<div class="sec_inner_container mt-0 pt-2 sec_inner_bgwhite">
					<h2 class="point1-heading2">場所／目的／シーン／必要な機能／<br class="sp" />に合った防犯カメラをご案内！</h2>
					<img class="image-pc-sp" src="<?php bloginfo('template_directory'); ?>/img/front-page/point_1_pc_sp.png" alt="">
					<p class="point1-always-check">
						モニターはもちろん<br class="sp" />PCでもスマホでも<br />
						100万画素以上の鮮明画像を<br />
						いつでも、どこでも<br class="sp" />遠隔で確認！
					</p>
					<div class="camera-type">
						<img class="image-camera-type" src="<?php bloginfo('template_directory'); ?>/img/front-page/cloud_recording.png" alt="クラウド録画タイプカメラ">
						<img class="image-camera-type" src="<?php bloginfo('template_directory'); ?>/img/front-page/sd_recording.png" alt="SDカード録画タイプカメラ">
					</div>
					<p class="camra-type-paragraph">お取り扱いがございます。</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type1.png" alt="屋内用AHDドームカメラ" class="camera-type-heading">
					<div class="d-flex camera_type_contents">
						<div class="camera_type_images">
							<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type1_image.jpg" alt="" class="camera_type_image">
							<p class="camera_type_images_text">カメラはいずれかを選択</p>
						</div>
						<ul class="camera_type_list">
							<li class="camera_type_item">景観を損ねないカメラ</li>
							<li class="camera_type_item">マンションやビルのエントランス、工場や会社のロビー等で広く使用されています</li>
							<li class="camera_type_item">壁/天井どちらにでも設置可能</li>
						</ul>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type2.png" alt="屋外用 AHDガンタイプカメラ" class="camera-type-heading">
					<div class="d-flex camera_type_contents">
						<div class="camera_type_images">
							<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type2_image.jpg" alt="" class="camera_type_image">
							<p class="camera_type_images_text">カメラはいずれかを選択</p>
						</div>
						<ul class="camera_type_list">
							<li class="camera_type_item">防水タイプ（IP67）なので屋外でも安心</li>
							<li class="camera_type_item">夜間は赤外線照射機能により白黒に切り替わり、鮮明に撮影します（赤外線投光 20M）</li>
							<li class="camera_type_item">逆光にも強い WDR 機能付</li>
						</ul>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type3.png" alt="管理　レコーダー" class="camera-type-heading">
					<div class="d-flex camera_type_contents">
						<div class="camera_type_images">
							<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type3_image.jpg" alt="" class="camera_type_image">
						</div>
						<ul class="camera_type_list">
							<li class="camera_type_item">録画期間はカメラ1台で約2ヶ月<br />（画質・コマ数の設定により異なります）</li>
							<li class="camera_type_item">2TB 大容量HDD装備</li>
							<li class="camera_type_item">管理ソフト付属で複数拠点管理</li>
							<li class="camera_type_item">既設アナログ混在 OK</li>
							<li class="camera_type_item">HDML、D-SUB接続可</li>
						</ul>
					</div>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_type4.png" alt="標準工事　ネットワーク設定も含む" class="camera-type-heading -last">
					<ul class="camera_type_list -last">
						<li>月々 5,000円〜導入できます！</li>
					</ul>
					<p class="camera_option_paragprah">
						<mark class="highlight -under">各種センサー</mark>,<mark class="highlight -under">サイレン</mark>,<br class="sp" /><mark class="highlight -under">撃退装置連動</mark>も<br />
						弊社なら可能です
					</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/camera_options.jpg" alt="" class="image-option">
					<p class="how-to-use-paragraph">活用方法は様々！</p>
					<img src="<?php bloginfo('template_directory'); ?>/img/front-page/how_to_use.png" alt="" class="image-option">
					<h2 class="heading-brd-radius">設置実績</h2>
					<h3 class="point1-heading3"><strong class="point1-leaving">戸建住宅</strong>も<br class="sp">お任せください！</h3>
					<ul class="achievement-list">
						<li class="achievement-item">
							<div class="achievement-genre">
								<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_local_goverment.png" alt="" class="achievement-icon -local_goverment">
								<h4 class="achievement-heading">自治体</h4>
							</div>
							<ul class="achievement-contents-list">
								<li class="achievement-content-item">・商店街</li>
								<li class="achievement-content-item">・アーケード</li>
								<li class="achievement-content-item">・街頭</li>
								<li class="achievement-content-item">・駐車場</li>
								<li class="achievement-content-item">・駐輪場</li>
								<li class="achievement-content-item">・公園</li>
								<li class="achievement-content-item">・体育館</li>
								<li class="achievement-content-item">・公民館</li>
								<li class="achievement-content-item">・市民館</li>
								<li class="achievement-content-item">・病院</li>
								<li class="achievement-content-item">・役所</li>
							</ul>
						</li>
					</ul>
					<ul class="achievement-list">
						<li class="achievement-item">
							<div class="achievement-genre">
								<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_general_company.png" alt="" class="achievement-icon -general_company">
								<h4 class="achievement-heading">一般企業</h4>
							</div>
							<ul class="achievement-contents-list">
								<li class="achievement-content-item">・駅</li>
								<li class="achievement-content-item">・スーパー</li>
								<li class="achievement-content-item">・飲食店</li>
								<li class="achievement-content-item">・商店/ホームセンター</li>
								<li class="achievement-content-item">・貴金属店</li>
								<li class="achievement-content-item">・パチンコ店</li>
								<li class="achievement-content-item">・工場</li>
								<li class="achievement-content-item">・工事現場</li>
							</ul>
						</li>
					</ul>
					<ul class="achievement-list">
						<li class="achievement-item">
							<div class="achievement-genre">
								<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_real_estate.png" alt="" class="achievement-icon -real_estate">
								<h4 class="achievement-heading">不動産物件</h4>
							</div>
							<ul class="achievement-contents-list">
								<li class="achievement-content-item">・ビル</li>
								<li class="achievement-content-item">・マンション</li>
								<li class="achievement-content-item">・アパート</li>
								<li class="achievement-content-item">・商業施設</li>
								<li class="achievement-content-item">・コインパーキング</li>
								<li class="achievement-content-item">・月極駐車場</li>
							</ul>
						</li>
					</ul>
					<h2 class="heading-brd-radius">工事内容</h2>
					<h3 class="construction-heading"><mark class="highlight">・防犯カメラ工事</mark></h3>
					<p class="construction-paragpraph">豊富なラインナップから、<br class="sp">お客様の要望と<br />ご予算に合ったカメラを<br class="sp">ご提案いたします</p>
					<h3 class="construction-heading"><mark class="highlight">・防犯カメラの</mark><br class="sp"><mark class="highlight">リニューアル工事</mark></h3>
					<p class="construction-paragpraph">古くなったカメラの<br class="sp">リニューアルもお任せください。<br />使える機器は使用したままの<br class="sp">リニューアルも対応しております</p>
					<h3 class="construction-heading"><mark class="highlight">・ワイヤレスカメラ工事</mark></h3>
					<p class="construction-paragpraph">住宅用の安価なワイヤレスカメラは<br class="sp">もちろん、配線が難しい場所での<br />ネットワークカメラの<br class="sp">ワイヤレス化も施工可能です</p>
					<h3 class="construction-heading"><mark class="highlight">・防犯カメラの</mark><mark class="highlight"> 短期レンタル</mark></h3>
					<p class="construction-paragpraph">マンションの大規模修繕の<br class="sp">防犯カメラや、<br />工事現場の防犯カメラも<br class="sp">短期レンタルを行っております</p>
			</div>
			<!-- point 2 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_2.png" alt="ご要望に応えられる技術力/提案力" class="image-point2">
			<div class="sec_inner_container sec_inner_bgwhite sec_price">
				<p class="pt-3 font-weight-bold">明確な料金設定で、工事費用が気になる方にも安心してご利用頂いております。</p>
				<img class="price_list pc" src="<?php bloginfo('template_directory'); ?>/img/front-page/price_list.png" alt="価格表">
				<img class="price_list sp" src="<?php bloginfo('template_directory'); ?>/img/front-page/price_list_sp.png" alt="価格表">
			</div>
			<!-- point 3 -->
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/point_3.png" alt="ジャンルが違っても一括受注が可能！">
			<div class="sec_inner_container sec_inner_bgwhite">
				<p class="pt-3 point3_text">
					自社にて<br>
					<span class="point3_dark">□電気工事部門</span>&nbsp;&nbsp;<br class="md-br">
					<span class="point3_light">□空調工事部門</span>&nbsp;&nbsp;<br class="md-br">
					<span class="point3_dark">□防犯カメラ部門</span><br>
					を有しており、<br class="sp">一括受注が可能です。<br>
					その他、多数実績による<br class="sp">蓄積された経験で、<br class="md-br">小さな "困った" にも<br class="sp">対応致します。
				</p>
				<div class="row genre_imgs">
					<a href="//nagoya-denki.biz/"><img class="" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_electric.jpg" alt="名古屋電気工事"></a>
					<a href="//nagoya-aircon.com/"><img class="" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_aircon.jpg" alt="名古屋空調工事"></a>
					<a href="//nagoya-shoubo.com"><img class="" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_firefight.jpg" alt="名古屋消防設備"></a>
					<a href="http://zero-camera.net/"><img class="" src="<?php bloginfo('template_directory'); ?>/img/front-page/genre_camera.jpg" alt="無料防犯カメラ"></a>
				</div>
			</div>
		</section>
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
		<section id="front_result_and_voice" class="sec_container">
			<img src="<?php bloginfo('template_directory'); ?>/img/front-page/construction_results.png" alt="名古屋空調工事">
			<div class="sec_inner_container sec_inner_bgblue">
				<div class="row align-items-center">
					<img class="col-4" src="<?php bloginfo('template_directory'); ?>/img/front-page/customer_message.png" alt="お客様の声">
					<span class="col-8 custom_voice">
						名古屋防犯カメラを<br class="md-br">利用してくださった<br>
						<span class="underline_blue">お客様の声</span>
					</span>
				</div>
				<div class="custom_voice_box">
					<div class="speechbaloon">
						昔から「防犯カメラは高い」というイメージを持っていましたが、<span class="underline_yellow">こちらの予算に合わせてご提案していただけました。</span>支払の方法も選択することができ、導入して良かったと思っています。
					</div>
					<div class="custom_image">
						<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_customer_1.png" alt="お客様">
					</div>
				</div>
				<div class="custom_voice_box">
					<div class="speechbaloon">
						複数の工場があり、トラブル時以外にも工場内の動線等の確認もする為にカメラを導入しました。<span class="underline_yellow">各工場の状況を一括管理することができるようになり、</span>改善の指示も出しやすくなりました。
					</div>
					<div class="custom_image">
						<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_customer_2.png" alt="お客様">
					</div>
				</div>
				<div class="custom_voice_box">
					<div class="speechbaloon">
						高額な商品を取り扱う為、侵入されるまでとにかく時間が掛かるよう、<span class="underline_yellow">カメラだけではなくスモークやネットなどの設備を組み合わせて</span>いただきました。実際にそうした設置が可能な業者さんは聞いたこともなく、頼んで良かったです。
					</div>
					<div class="custom_image">
						<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_customer_3.png" alt="お客様">
					</div>
				</div>
			</div>
		</section>
		<section id="front_company" class="sec_container sec_inner_bgblue">
			<div class="company_box_header">
				名古屋防犯カメラ／会社概要
			</div>
			<div class="company_box">
				<div class="company_1st_message">
					<div class="company_catchcopy">
						あなたと<br class="md-br">あなたの大切な人の<br class="md-br">明日を守る
					</div>
					<p>
						私たちの仕事は、電気工事事業、空調工事事業、セキュリティ事業、防災事業と多岐に渡ります。しかし、すべてに通ずる点はお客様の安心・快適を創る仕事だということです。私たちの技術で、お客様、そしてお客様が大切にされている全てを守れるよう、私たちセキュアスは全社一丸となって業務を邁進しています。
					</p>
				</div>
				<div class="company_box_main">
					<img class="photo_president" src="<?php bloginfo('template_directory'); ?>/img/front-page/photo_president.jpg" alt="会社代表近影">
					<div class="company_info_box">
						<span class="company_info_itemname">商号</span><br>
						株式会社セキュアス
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">本社所在地</span><br>
						〒455-0037　名古屋市港区名港一丁目8-9<br>
						丸二総合ビル2F
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">TEL</span>　０５２−３０４−７４１０<br>
						<span class="company_info_itemname">FAX</span>　０５２−３０４−７４１１
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">豊橋営業所</span><br>
						〒440-0011　豊橋市牛川通一丁目21-5
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">代表者</span>　代表取締役　石川和寛
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">事業内容</span>
						<ul class="ul_business_description">
							<li>電気工事事業（住宅、集合住宅、工場等　新築・改築電気設備工事）</li>
							<li>空調工事事業（家庭用・業務用エアコン販売、設置工事）</li>
							<li>セキュリティ事業（防犯カメラ、防犯設備機器販売、設置工事）</li>
							<li>家電修理メンテ事業（メーカー家電修理、エアコン洗浄メンテナンス）</li>
							<li>消防・防災事業（消防点検、防災設備機器販売、工事）</li>
							<li>ゼロカメラ事業（無料防犯カメラサービス“ゼロカメラ”事業運営本部）</li>
							<li>ＷＥＢシステム事業（集中監視システム等構築）</li>
						</ul>
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">従業員数</span><br>
						１５名　（パート、アルバイト含む）
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">取引銀行</span><br>
						愛知銀行　港支店／三菱東京ＵＦＪ銀行　名古屋港支店／名古屋銀行　港支店
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">取引先</span><br>
						パナソニック、東芝、ダイキン、三菱電機、アツミ電気<br>
						竹中エンジニアリング、ＮＳＳ、日本防犯システム、ヤマトプロテック　他　多数
					</div>
					<div class="company_info_box">
						<span class="company_info_itemname">保有資格</span><br>
						電気主任技術者、電気工事施工管理士、電気工事士、消防設備士、防犯設備士、管工事施工管理士、工事担任者、他
					</div>
				</div>
			</div>
		</section>
		<section id="front_flow" class="sec_container sec_inner_bgwhite">
			<div class="front_flow_header">
				ご利用の流れ
			</div>
			<div class="front_flow_box">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_flow_1.png" class="front_flow_image">
				<div class="front_flow_box_text">
					まずは<br class="md-br">御社のご要望を<br>
					教えてください
				</div>
			</div>
			<div class="front_flow_triangle"></div>
			<div class="front_flow_box">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_flow_2.png" class="front_flow_image">
				<div class="front_flow_box_text">
					御社に合わせた<br class="md-br">工事プランを<br>
					ご提案いたします
				</div>
			</div>
			<div class="front_flow_triangle"></div>
			<div class="front_flow_box">
				<img src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_flow_3.png" class="front_flow_image">
				<div class="front_flow_box_text">
					工事プランに<br>
					ご納得いただき<br class="md-br">契約成立
				</div>
			</div>
			<div class="front_flow_triangle"></div>
			<div class="front_flow_start">
				工事スタート
			</div>
			<img class="flow_engineer_illust" src="<?php bloginfo('template_directory'); ?>/img/front-page/flow_engineer_illust.png" alt="お任せ下さい">
		</section>
		<section id="front_question" class="sec_container">
			<div class="front_question_header">
				よくある<br class="md-br">ご質問
			</div>
			<div class="sec_inner_container sec_inner_bgbrown">
				<div class="qabox">
					<div class="qabox_inner qabox_q">
					既に設置してあるカメラの一部が故障しました。<br />部分的な交換も可能ですか？
					</div>
					<div class="qabox_inner qabox_a">
						お客様のご要望に合わせ、部分的な交換でも対応可能です。
					</div>
				</div>
				<div class="qabox">
					<div class="qabox_inner qabox_q">
						カメラの器材は持っているのですが、<br />工事だけでもお願いできますか？
					</div>
					<div class="qabox_inner qabox_a">
						設定・施工のみでも可能です。
					</div>
				</div>
				<div class="qabox">
					<div class="qabox_inner qabox_q">
						夜間や休日での施工も可能ですか？
					</div>
					<div class="qabox_inner qabox_a">
						対応可能です。お気軽にお問合せください。
					</div>
				</div>
			</div>
		</section>
		<section id="front_caution" class="sec_container sec_inner_container sec_inner_bgwhite">
			<img class="icon_caution" src="<?php bloginfo('template_directory'); ?>/img/front-page/icon_caution.png">
			<h1>
				現在、弊社への問い合わせ・ご相談を数多く頂いております。
			</h1>
			<p>
				ご連絡いただいた順に対応させて頂くため、<br>
				場合によってはお待ちいただくこともございます。<br>
				そのため、具体的な案件をお持ちの方は相談だけでも構いませんので<br>
				早めにご連絡いただければと思います。<br>
			</p>
		</section>
		<!-- お問い合わせはこちら 見積無料 -->
		<?php get_template_part('contactform-link'); ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
