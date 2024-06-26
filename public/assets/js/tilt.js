"use strict";
! function (t) {
    t.fn.tilt = function (s) {
        var i = function () {
                this.ticking || (requestAnimationFrame(g.bind(this)), this.ticking = !0)
            },
            e = function () {
                t(this).on("mousemove", r), t(this).on("mouseenter", n), this.settings.reset && t(this).on("mouseleave", l)
            },
            a = function () {
                var s = this;
                void 0 !== this.timeout && clearTimeout(this.timeout), t(this).css({
                    transition: this.settings.speed + "ms " + this.settings.easing
                }), this.settings.glare && this.glareElement.css({
                    transition: "opacity " + this.settings.speed + "ms " + this.settings.easing
                }), this.timeout = setTimeout(function () {
                    t(s).css({
                        transition: ""
                    }), s.settings.glare && s.glareElement.css({
                        transition: ""
                    })
                }, this.settings.speed)
            },
            n = function (s) {
                this.ticking = !1, t(this).css({
                    "will-change": "transform"
                }), a.call(this), t(this).trigger("tilt.mouseEnter")
            },
            h = function (s) {
                return "undefined" == typeof s && (s = {
                    pageX: t(this).offset().left + t(this).outerWidth() / 2,
                    pageY: t(this).offset().top + t(this).outerHeight() / 2
                }), {
                    x: s.pageX,
                    y: s.pageY
                }
            },
            r = function (t) {
                this.mousePositions = h(t), i.call(this)
            },
            l = function () {
                a.call(this), this.reset = !0, i.call(this), t(this).trigger("tilt.mouseLeave")
            },
            o = function () {
                var s = t(this).width(),
                    i = t(this).height(),
                    e = t(this).offset().left,
                    a = t(this).offset().top,
                    n = (this.mousePositions.x - e) / s,
                    h = (this.mousePositions.y - a) / i,
                    r = (this.settings.maxTilt / 2 - n * this.settings.maxTilt).toFixed(2),
                    l = (h * this.settings.maxTilt - this.settings.maxTilt / 2).toFixed(2),
                    o = Math.atan2(this.mousePositions.x - (e + s / 2), -(this.mousePositions.y - (a + i / 2))) * (180 / Math.PI);
                return {
                    tiltX: r,
                    tiltY: l,
                    percentageX: 100 * n,
                    percentageY: 100 * h,
                    angle: o
                }
            },
            g = function () {
                return this.transforms = o.call(this), this.reset ? (this.reset = !1, t(this).css("transform", "perspective(" + this.settings.perspective + "px) rotateX(0deg) rotateY(0deg)"), void(this.settings.glare && (this.glareElement.css("transform", "rotate(180deg) scale(1.75)"), this.glareElement.css("opacity", "" + this.settings.maxGlare / 4)))) : (t(this).css("transform", "perspective(" + this.settings.perspective + "px) rotateX(" + ("x" === this.settings.axis ? 0 : this.transforms.tiltY) + "deg) rotateY(" + ("y" === this.settings.axis ? 0 : this.transforms.tiltX) + "deg) scale3d(" + this.settings.scale + "," + this.settings.scale + "," + this.settings.scale + ")"), this.settings.glare && (this.glareElement.css("transform", "rotate(" + this.transforms.angle + "deg) scale(1.75)"), this.glareElement.css("opacity", "" + this.transforms.percentageY * this.settings.maxGlare / 100)), t(this).trigger("change", [this.transforms]), void(this.ticking = !1))
            },
            c = function () {
                if (!this.settings.glarePrerender) {
                    t(this).append('<div class="js-tilt-glare"><div class="js-tilt-glare-inner"></div></div>'), this.glareElementWrapper = t(this).find(".js-tilt-glare"), this.glareElement = t(this).find(".js-tilt-glare-inner");
                    var s = {
                        position: "absolute",
                        top: "0",
                        left: "0",
                        width: "100%",
                        height: "100%"
                    };
                    this.glareElementWrapper.css(s).css({
                        overflow: "hidden"
                    }), this.glareElement.css(s).css({
                        "background-image": "linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(255,255,255,1) 100%)",
                        opacity: "" + this.settings.maxGlare / 2,
                        transform: "rotate(180deg) scale(1.75)"
                    })
                }
            };
        return t.fn.tilt.destroy = function () {
            t(this).each(function () {
                t(this).find(".js-tilt-glare").remove(), t(this).css({
                    "will-change": "",
                    transform: ""
                }), t(this).off("mousemove mouseenter mouseleave")
            })
        }, t.fn.tilt.getValues = function () {
            var s = [];
            return t(this).each(function () {
                this.mousePositions = h.call(this), s.push(o.call(this))
            }), s
        }, t.fn.tilt.reset = function () {
            t(this).each(function () {
                var s = this;
                this.mousePositions = h.call(this), this.settings = t(this).data("settings"), l.call(this), setTimeout(function () {
                    s.reset = !1
                }, this.settings.transition)
            })
        }, this.each(function () {
            var i = this;
            this.settings = t.extend({
                maxTilt: t(this).is("[data-tilt-max]") ? t(this).data("tilt-max") : 20,
                perspective: t(this).is("[data-tilt-perspective]") ? t(this).data("tilt-perspective") : 300,
                easing: t(this).is("[data-tilt-easing]") ? t(this).data("tilt-easing") : "cubic-bezier(.03,.98,.52,.99)",
                scale: t(this).is("[data-tilt-scale]") ? t(this).data("tilt-scale") : "1",
                speed: t(this).is("[data-tilt-speed]") ? t(this).data("tilt-speed") : "400",
                transition: !t(this).is("[data-tilt-transition]") || t(this).data("tilt-transition"),
                axis: t(this).is("[data-tilt-axis]") ? t(this).data("tilt-axis") : null,
                reset: !t(this).is("[data-tilt-reset]") || t(this).data("tilt-reset"),
                glare: !!t(this).is("[data-tilt-glare]") && t(this).data("tilt-glare"),
                maxGlare: t(this).is("[data-tilt-maxglare]") ? t(this).data("tilt-maxglare") : 1
            }, s), this.init = function () {
                t(i).data("settings", i.settings), i.settings.glare && c.call(i), e.call(i)
            }, this.init()
        })
    }, t("[data-tilt]").tilt()
}(jQuery);