[[*disqus:is=`1`:then=`
		<div id="disqus">
			<h2 id="add-your-comment">[[%addcomment? &namespace=`ludwigdisqus` &language=`[[++cultureKey]]`]]</h2>
			<div id="disqus_thread">[[!ludwigdisqus_seofriendly:strip]]</div>
			<script type="text/javascript">
			  var disqus_shortname = '[[++ludwigdisqus.shortname]]';
			  var disqus_config = function () { 
						this.language = "[[++cultureKey]]";
			  };
			  var disqus_identifier = '[[*id]]';
			  var disqus_title = '[[*pagetitle]]';
			  (function() {
				  var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
				  dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
				  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
			  })();
			</script>
		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		<a href="https://ludwig.im" class="dsq-brlink">Comments powered by <span class="logo-disqus">LudwigDisqus for ModX</span></a>
		</div>
`]]
