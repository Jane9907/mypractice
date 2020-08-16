function(o) {
    var n = t.props,
        a = n.controlProps,
        i = n.parser,
        s = n.ignore,
        l = n.withField,
        c = n.fieldValue,
        u = {
            focus: a.onFocus,
            blur: a.onBlur,
            change: a.onChange
        }[e];
    return (0, se.default)(s, e) ? u ? u(o) : o : t.props.isToggle ? (0, _.compose)(r, (0, q.default)(u || v.default))(o) : (0, _.compose)(r, i, function(e) {
        return t.getValue(e)
    }, (0, q.default)(u || v.default))(o, l ? c : void 0)
}