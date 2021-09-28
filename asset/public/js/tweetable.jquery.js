! function(e) {
    jQuery.support.cors = !0, jQuery.fn.tweetable = function(t) {
        return t = e.extend({}, e.fn.tweetable.options, t), this.each(function() {
            var a, s, i, n, r = jQuery(this),
                l = jQuery('<ul class="tweetList footer-recent-tweets">')[t.position.toLowerCase() + "To"](r),
                o = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                p = "",
                u = "&limit=";
            jQuery.getJSON(p + t.username + u + t.limit, r, function(r) {
                function p() {
                    u.eq(f++).fadeOut(400, function() {
                        f = f === c ? 0 : f, u.eq(f).fadeIn(400)
                    })
                }
              
                t.onComplete(l)
            }).error(function() {})
        })
    }, e.fn.tweetable.options = {
        limit: 5,
        username: "",
        time: !1,
        rotate: !1,
        speed: 5e3,
        replies: !1,
        position: "append",
        failed: "No tweets available",
        html5: !1,
        retweets: !1,
        onComplete: function() {}
    }
}(jQuery);