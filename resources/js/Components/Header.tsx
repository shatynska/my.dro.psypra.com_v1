import { ReactNode } from 'react';
import Container from '@/Components/Container';

export default function Header({ value, children }: { value?: ReactNode; children?: ReactNode }) {
    return (
        <div className='bg-white py-2 shadow'>
            <Container>
                <div className='max-w-xl'>
                    <h2 className='text-3xl font-bold tracking-tight text-slate-800'>{value}</h2>
                    <p className='mt-4 text-lg leading-8 text-gray-500'>{children}</p>
                </div>
            </Container>
        </div>
    );
}
