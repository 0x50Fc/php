

VTPublish.Publish.push(
		{
			"hasPrefix":"http://read.douban.com/ebook/",
			"fields":[
			          {"name":"type","value":"ebook"},
			          
			          {
			        	  "name":"bookId",
			        	  "value":function(){
			        		  return window.location.href.split("/")[4];
			        	  }
			          },
			          
			          {
			        	  "name":"title",
			        	  "value":function(){
			        		  return $(".article-title").html();
			        	  }
			          }
			]
		}
);