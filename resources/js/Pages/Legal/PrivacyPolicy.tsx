import useRoute from '@/Hooks/useRoute';
import ApplicationLogo from '@/Components/ApplicationLogo';
import { Head, Link } from '@inertiajs/react';
import React from 'react';

export default function PrivacyPolicy({ policy }: { policy: string }) {
    const route = useRoute();
    return (
        <>
            <Head title='Privacy Policy' />
            <div className='relative overflow-hidden bg-white py-16'>
                <div className='hidden lg:absolute lg:inset-y-0 lg:block lg:h-full lg:w-full lg:[overflow-anchor:none]'>
                    <div className='relative mx-auto h-full max-w-prose text-lg' aria-hidden='true'>
                        <svg
                            className='absolute top-12 left-full translate-x-32 transform'
                            width={404}
                            height={384}
                            fill='none'
                            viewBox='0 0 404 384'>
                            <defs>
                                <pattern
                                    id='74b3fd99-0a6f-4271-bef2-e80eeafdf357'
                                    x={0}
                                    y={0}
                                    width={20}
                                    height={20}
                                    patternUnits='userSpaceOnUse'>
                                    <rect
                                        x={0}
                                        y={0}
                                        width={4}
                                        height={4}
                                        className='text-gray-200'
                                        fill='currentColor'
                                    />
                                </pattern>
                            </defs>
                            <rect width={404} height={384} fill='url(#74b3fd99-0a6f-4271-bef2-e80eeafdf357)' />
                        </svg>
                        <svg
                            className='absolute top-1/2 right-full -translate-y-1/2 -translate-x-32 transform'
                            width={404}
                            height={384}
                            fill='none'
                            viewBox='0 0 404 384'>
                            <defs>
                                <pattern
                                    id='f210dbf6-a58d-4871-961e-36d5016a0f49'
                                    x={0}
                                    y={0}
                                    width={20}
                                    height={20}
                                    patternUnits='userSpaceOnUse'>
                                    <rect
                                        x={0}
                                        y={0}
                                        width={4}
                                        height={4}
                                        className='text-gray-200'
                                        fill='currentColor'
                                    />
                                </pattern>
                            </defs>
                            <rect width={404} height={384} fill='url(#f210dbf6-a58d-4871-961e-36d5016a0f49)' />
                        </svg>
                        <svg
                            className='absolute bottom-12 left-full translate-x-32 transform'
                            width={404}
                            height={384}
                            fill='none'
                            viewBox='0 0 404 384'>
                            <defs>
                                <pattern
                                    id='d3eb07ae-5182-43e6-857d-35c643af9034'
                                    x={0}
                                    y={0}
                                    width={20}
                                    height={20}
                                    patternUnits='userSpaceOnUse'>
                                    <rect
                                        x={0}
                                        y={0}
                                        width={4}
                                        height={4}
                                        className='text-gray-200'
                                        fill='currentColor'
                                    />
                                </pattern>
                            </defs>
                            <rect width={404} height={384} fill='url(#d3eb07ae-5182-43e6-857d-35c643af9034)' />
                        </svg>
                    </div>
                </div>
                <div className='relative px-6 lg:px-8'>
                    <div className='mx-auto max-w-prose text-lg'>
                        <Link href={route('home')}>
                            <ApplicationLogo className='mx-auto h-16 w-16 fill-current text-red-500' />
                        </Link>
                        <h1>
                            <span className='mt-4 block text-center text-lg font-semibold text-indigo-600'>
                                Introducing
                            </span>
                            <span className='mt-2 block text-center text-3xl font-bold leading-8 tracking-tight text-gray-900 sm:text-4xl'>
                                Privacy Policy
                            </span>
                        </h1>

                        <div
                            className='prose prose-lg prose-indigo mx-auto mt-6 text-gray-500'
                            dangerouslySetInnerHTML={{ __html: policy }}
                        />
                    </div>
                </div>
            </div>
        </>
    );
}
