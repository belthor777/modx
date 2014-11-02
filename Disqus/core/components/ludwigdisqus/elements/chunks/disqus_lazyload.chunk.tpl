[[*disqus:is=`1`:then=`
		<div id="disqus">
			<h2 id="add-your-comment">[[%addcomment? &namespace=`ludwigdisqus` &language=`[[++cultureKey]]`]]</h2>
			<meta itemprop="interactionCount" content="UserComments:[[!ludwigdisqus_commentcount]]"/>
			<div id="disqus_thread">[[!ludwigdisqus_seofriendly:strip]]</div>
			<script type="text/javascript">
				var disqus_loaded = false;
				function load_ludwigdisqus()
				{
					disqus_loaded = true;
					var disqus_shortname = '[[++ludwigdisqus.shortname]]';
					var disqus_config = function () { 
						this.language = "[[++cultureKey]]";
					};
					var disqus_identifier = '[[*id]]';
					var disqus_title = '[[*pagetitle]]';
					var disqus_url = '[[++site_url]][[~[[*id]]]]';
					(function() {
						var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
						dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
						(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
					})();					
				}
				function isScrolledIntoView(elem, myoffset)
				{
					myoffset = ( typeof myoffset !== 'undefined' ) ? myoffset : 0;
					var docViewTop = $(window).scrollTop();
					var docViewBottom = docViewTop + $(window).height();
					var elemTop = $(elem).offset().top - myoffset;
					var elemBottom = elemTop + myoffset + $(elem).height();
					return ((elemBottom >= docViewTop) && (elemTop <= docViewBottom));
				}
				$(window).scroll(function(){if(isScrolledIntoView('#disqus', 1500) && (disqus_loaded == false)){load_ludwigdisqus();}});
			</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="https://ludwig.im" class="dsq-brlink">Comments powered by <span class="logo-disqus">LudwigDisqus for ModX</span></a>
		</div>
`]]

