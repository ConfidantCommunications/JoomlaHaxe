package joomla;

class JoomlaHelper {
    public static inline function makeSimple(text):Simple return untyped __call__("makeSimple", text)
    public static inline function makeSimple2<T>(vari:T) return new Simple2(vari)
    public static inline function printSimple(simple:Simple) untyped __call__("printSimple", simple)
}
