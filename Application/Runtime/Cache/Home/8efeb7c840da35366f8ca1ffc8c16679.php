<?php if (!defined('THINK_PATH')) exit();?> 
 < ! D O C T Y P E   h t m l   P U B L I C   " - / / W 3 C / / D T D   X H T M L   1 . 0   T r a n s i t i o n a l / / E N "   " h t t p : / / w w w . w 3 . o r g / T R / x h t m l 1 / D T D / x h t m l 1 - t r a n s i t i o n a l . d t d " >  
 < h t m l >  
 < h e a d >  
 < m e t a   h t t p - e q u i v = " X - U A - C o m p a t i b l e "   c o n t e n t = " I E = E m u l a t e I E 7 " >  
 < m e t a   h t t p - e q u i v = " C o n t e n t - T y p e "   c o n t e n t = " t e x t / h t m l ;   c h a r s e t = g b 2 3 1 2 " >  
 < m e t a   n a m e = " k e y w o r d s "   c o n t e n t = " �NKbQ, �NKbir�T, �NKb^:W, �n�Nbc, �nir�T, �nQ, �NKb�n, �NKb�Nf" >  
 < m e t a   n a m e = " d e s c r i p t i o n "   c o n t e n t = " hQt�NKbQ/f-N�V g'Y�v�nir�T�Nfs^�S, CgZ�c�O�NKbir�TQ
N�Nf�{�~g�_wcYt�nir�T�T�e�c�OFU:g�Oo`�vMQ9��S^0" >  
 < l i n k   r e l = " S H O R T C U T   I C O N "   h r e f = " h t t p : / / w w w . q q e r s h o u . c o m / i m a g e s / f a v i c o n . i c o " >  
 < l i n k   t y p e = " t e x t / c s s "   r e l = " s t y l e s h e e t "   h r e f = " h t t p : / / w w w . q q e r s h o u . c o m / S k i n s / D e f a u l t 6 / r e g . c s s " >  
 < t i t l e > OXT{vU_  -   hQt�NKbQ- -N�V g'Y�v�nir�T�Nfs^�S��n| �NKb^:W| FU:g�Oo`| �NKb�n| �NKbir�T| �nir�T< / t i t l e >  
 < S C R I P T   l a n g u a g e = j a v a s c r i p t >  
 < ! - -  
 f u n c t i o n   C h e c k F o r m ( ) {  
 i f ( d o c u m e n t . t h i s F o r m . U s e r N a m e . v a l u e = = " " ) {  
 	 a l e r t ( " {vF�^�S�l	gkX�Q! " ) ;  
         d o c u m e n t . t h i s F o r m . U s e r N a m e . f o c u s ( ) ;  
         d o c u m e n t . t h i s F o r m . U s e r N a m e . s e l e c t ( ) ;  
 	 r e t u r n   f a l s e ;  
 	 }  
 i f ( d o c u m e n t . t h i s F o r m . P a a s s W o r d 1 b . v a l u e = = " " ) 	 {  
 	 a l e r t ( " �[x�l	gkX�Qcknx! " ) ;  
         d o c u m e n t . t h i s F o r m . P a a s s W o r d 1 b . f o c u s ( ) ;  
         d o c u m e n t . t h i s F o r m . P a a s s W o r d 1 b . s e l e c t ( ) ;  
 	 r e t u r n   f a l s e ;  
 	 }  
 i f   ( " F a l s e "   = =   " T r u e "   & &   d o c u m e n t . t h i s F o r m . C o d e . v a l u e   = =   " " ) {  
 	 a l e r t ( " ����eQ����x! " ) ;  
         d o c u m e n t . t h i s F o r m . C o d e . f o c u s ( ) ;  
         d o c u m e n t . t h i s F o r m . C o d e . s e l e c t ( ) ;  
 	 r e t u r n   f a l s e ;  
         }  
 }  
 f u n c t i o n   g e t _ C o d e ( ) {  
 d o c u m e n t . g e t E l e m e n t B y I d ( " i m g u r l " ) . s r c = ' / i n c / C o d e N u m ? ' + M a t h . r a n d o m ( )  
 }  
 / / - - >  
 < / S C R I P T >  
 < / h e a d >  
 < b o d y >  
 < D I V   i d = h e a d e r   c l a s s = w i n 1 0 0 0 > < A   i d = l o g o   h r e f = " / " > < I M G    
 a l t = hQt�NKbQ  s r c = " h t t p : / / w w w . q q e r s h o u . c o m / i m a g e s / g e t p a s s l o g o . p n g "   b o r d e r = " 0 " > < / A >    
 < D I V   i d = c i t y n a m e   c l a s s = p a s s w o r d n a m e > < S P A N > OXT�l�Q< / S P A N > < / D I V >  
 < D I V   i d = l o g i n t e x t > < A   h r e f = " / " > ԏ�V��u�< / A > | < A    
 h r e f = " / h o m e / h e l p . H t m l "   t a r g e t = _ b l a n k > .^�R< / A > < / D I V > < / D I V >  
 < f o r m   n a m e = " t h i s F o r m "   a c t i o n = " ? A c t i o n = L o g "   m e t h o d = " P O S T "   o n S u b m i t = " r e t u r n   C h e c k F o r m ( ) " >  
 < I N P U T   t y p e = h i d d e n   n a m e = C o m e U r l   v a l u e = ' M e m b e r / ' >  
 < D I V   c l a s s = m a i n _ l o g i n >  
 < D I V   c l a s s = b a n n e r _ a r e a > < i m g   s r c = " h t t p : / / w w w . q q e r s h o u . c o m / U p F i l e / I m g / 2 0 1 2 0 7 / 1 2 0 7 0 4 1 6 5 5 5 8 1 3 6 0 . g i f " > < / D I V >  
 < D I V   c l a s s = l o g i n _ a r e a >  
 < D I V   c l a s s = l o g i n _ b o x 1 >  
 < D I V   c l a s s = l o g i n _ b o x 2 >  
 < H 3 > < / H 3 >  
 < U L   c l a s s = u l _ l o g i n >  
     < L I > < S P A N   s t y l e = " C O L O R :   # f 1 6 d 1 b " > hQt�NKbQ- - pN�`@b �0VS�`@b�< / S P A N >    
     < L I > < S P A N > ^& # 8 1 9 5 ; �S�< I N P U T   s t y l e = " C O L O R :   # 5 f 5 f 5 f "   t y p e = t e x t   n a m e = " U s e r N a m e "   c l a s s = t x t _ l g n   v a l u e = " " > < / S P A N >  
     < L I > < S P A N > �[& # 8 1 9 5 ; x�< I N P U T   n a m e = " P a a s s W o r d 1 b "   c l a s s = t x t _ l g n   t y p e = p a s s w o r d > < / S P A N >  
     < L I     s t y l e = " d i s p l a y : n o n e " > < S P A N > ����x�< I N P U T   n a m e = C o d e   s t y l e = " w i d t h : 8 4 p x ; "   c l a s s = t x t _ l g n   o n f o c u s = " g e t _ C o d e ( ) " >   < i m g   s r c = " h t t p : / / w w w . q q e r s h o u . c o m / S k i n s / D e f a u l t 6 / c o d e . g i f "   i d = i m g u r l   a l i g n = a b s m i d d l e   s t y l e = ' c u r s o r : p o i n t e r '   a l t = ' ����xwNnZi? ���p�Q7R�e����x'   o n c l i c k = " t h i s . s r c = ' i n c / C o d e N u m ? ' + M a t h . r a n d o m ( ) " > < / S P A N >  
     < L I > < L A B E L > < I N P U T     n a m e = " C o o k i e "   c l a s s = c h k _ l g n   C H E C K E D   t y p e = c h e c k b o x   v a l u e = " 2 " > N!kꁨR{vU_< / L A B E L > & n b s p ; & n b s p ; & n b s p ; & n b s p ; < A   h r e f = " g e t p a s s " > �_���[x�< / A >    
     < L I > < i n p u t   t y p e = " i m a g e "   s r c = " / S k i n s / D e f a u l t 6 / l o g i n 1 . g i f "   / > < A   c l a s s = r e g i s t   h r e f = " / Z h u c e 2 0 1 5 " > < f o n t   c o l o r = " # F F 0 0 0 0 " > �_��l�Q  & g t ; & g t ; < / f o n t > < / A >  
     < / L I > < / U L >  
 < D I V   c l a s s = l i n k - l o g i n > < S P A N   c l a s s = l o t s > O(uT\OQ�z&��S{vU_�< / S P A N >   < a   c l a s s = l o i c o   t i t l e = Q Q (u7b{vU_    h r e f = " j a v a s c r i p t : t o Q z o n e L o g i n ( ) " > < i m g   s r c = / A P I / Q Q / q q _ l o g i n . p n g > < / a >  
 < a   c l a s s = l o i c o   t i t l e = �ejm�_ZS{vU_    h r e f = " j a v a s c r i p t : t o s i n a L o g i n ( ) " > < i m g   s r c = / A P I / S i n a / S i n a _ l o g i n . p n g > < / a > < b r >  
   < a   c l a s s = l o i c o   t i t l e = /e�N�[(u7b{vU_    h r e f = " j a v a s c r i p t : t o a l i p a y L o g i n ( ) " > < i m g   s r c = / A P I / a l i p a y / a l i p a y _ l o g i n . p n g > < / a >  
 < / D I V >  
 < / D I V > < / D I V > < / D I V > < / D I V > < ! - - e n d   m a i n   - - >  
 < / f o r m >  
 < S c r i p t   l a n g u a g e = " J a v a S c r i p t "   S r c = " / I n c / J s / A u t o H o m e . L o g i n V a l i d a t e 1 . 1 . j s " > < / S c r i p t >  
 < s c r i p t > d o c u m e n t . t h i s F o r m . U s e r N a m e . f o c u s ( ) < / s c r i p t >  
 < d i v   c l a s s = " f o o t e r - b o x " >  
 < d i v   c l a s s = " f o o t e r - t a b l e " >  
 < d i v   c l a s s = " f o o t e r - c o p y " >  
 	 < a   h r e f = ' / h o m e / a b o u t u s . h t m l '   t i t l e = ' sQ�Nb�N'   t a r g e t = _ b l a n k > sQ�Nb�N< / a > |   < a   h r e f = ' / h o m e / o n l i n e - k e f u '   t i t l e = ' 	g���NhQt�NKbQ�[gۏL��[݋'   c l a s s = f d u i h u a > T��|�[g< / a > |   < a   h r e f = ' / V I P / '   t i t l e = ' V I P OXT'   t a r g e t = _ b l a n k > V I P OXT< / a > |   < A   h r e f = ' / h o m e / d e l . h t m l '   t a r g e t = _ b l a n k > b�� Rd��Oo`< / A > |    
 < a   h r e f = / h o m e / I t e m . H t m l   t a r g e t = _ b l a n k > MQ#��Xf< / a >   |   < a   h r e f = / h o m e / h e l p . H t m l   t a r g e t = _ b l a n k > .^�R-N�_< / a > |   < a   h r e f = / h o m e / a d . h t m l   t a r g e t = _ b l a n k > ^JTg�R< / a > |   < a   h r e f = / A r e a   t a r g e t = _ b l a n k > R�zRh�< / a > |   < a   h r e f = / h o m e / o n l i n e - k e f u   t a r g e t = _ b l a n k > No��Oo`>N�b< / a > |   < a   h r e f = / h o m e / o n l i n e - k e f u   t a r g e t = _ b l a n k > b���c�^��< / a >  
 	 < b r >  
 	 < s p a n   c l a s s = " z h a o s h a n g t e l " > hQ�VMQ9��bFU�p�~�< f o n t   s t y l e = " f o n t - s i z e : 1 4 p x " > 4 0 0 - 6 8 9 8 - 7 7 7 < / f o n t > & n b s p ; & n b s p ; & n b s p ; �R�v�[gQ Q �< f o n t   s t y l e = " f o n t - s i z e : 1 4 p x " > 2 3 0 5 7 7 1 2 1 0 < / f o n t > & n b s p ; & n b s p ; & n b s p ; �[g�p�~�0 5 4 3 - 3 1 5 6 6 7 7   & n b s p ; & n b s p ; & n b s p ; �[g Ow�0 5 4 3 - 3 1 5 7 7 8 8 < / s p a n > < b r >  
 	 C o p y r i g h t   & c o p y ;   2 0 1 0 - 2 0 1 6   hQt�NKbQ  I n c .   A l l   r i g h t s   r e s e r v e d .   < s c r i p t   s r c = h t t p : / / s 1 1 . c n z z . c o m / s t a t . p h p ? i d = 2 1 9 3 4 9 3 & w e b _ i d = 2 1 9 3 4 9 3   l a n g u a g e = J a v a S c r i p t > < / s c r i p t > < b r >  
 	 < s p a n   c l a s s = " c r e d i t   i c o n 1 " > < / s p a n > < s p a n   c l a s s = " c r e d i t   i c o n 2 " > < / s p a n > < s p a n   c l a s s = " c r e d i t   i c o n 3 " > < / s p a n >  
 < / d i v > 	 	  
 < / d i v > < / d i v >  
 < / b o d y >  
 < / h t m l >